<?php

namespace AccreditedResource\Filament\Admin\Resources\AccreditedResource\Forms;

use App\Models\Accredited;
use App\Models\City;
use App\Models\State;
use Filament\Forms\Form;
use Campidellis\FilamentHelpers\Contracts\FormBuilder;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Illuminate\Support\Facades\Http;
use Leandrocfe\FilamentPtbrFormFields\PhoneNumber;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Michaeld555\CepInput;

class AccreditedForm extends FormBuilder
{

    public function form(Form $form): Form
    {

        return $form
            ->schema([

                Group::make()
                    ->schema([

                        Section::make('Dados da Credenciada')
                            ->schema(static::getFormSchema('accredited'))
                            ->columns(2),

                        Section::make('Endereço da Credenciada')
                            ->schema(static::getFormSchema('address'))
                            ->columns(2),

                        Section::make('Dados do Responsável')
                            ->schema(static::getFormSchema('responsibleInfo'))
                            ->columns(2),

                    ])
                    ->columnSpan(['lg' => 2]),

                Section::make()
                    ->schema(static::getFormSchema())
                    ->columnSpan(['lg' => 1]),

            ])
            ->columns(3);

    }

    public static function getFormSchema(string $section = null): array
    {

        if ($section == "accredited") {

            return [

                Hidden::make('code')
                    ->default(Str::upper(Str::random(8))),

                FileUpload::make('photo_url')
                    ->label('Logo')
                    ->disk('s3')
                    ->directory('accredited-photos/' . Str::uuid())
                    ->avatar()
                    ->image()
                    ->visibility('private')
                    ->maxSize(2048)
                    ->columnSpan([
                        '2xl' => 1,
                    ]),

                Grid::make()->schema([

                    TextInput::make('cnpj')
                        ->mask("99.999.999/9999-99")
                        ->validationAttribute('CNPJ')
                        ->required()
                        ->suffixAction(fn ($state, $livewire, $set) => Action::make('search')
                            ->icon('heroicon-o-magnifying-glass')
                            ->action(function () use ($state, $livewire, $set) {

                                $livewire->validateOnly('data.cnpj');

                                $cnpj = preg_replace('/[^0-9]/', '', $state);

                                $request = Http::get("https://publica.cnpj.ws/cnpj/$cnpj")->json();

                                if (array_key_exists('status', $request)) {
                                    throw ValidationException::withMessages(['data.cnpj' => $request['detalhes']]);
                                }

                                $set('business_name', $request['razao_social']);
                                $set('fantasy_name', $request['estabelecimento']['nome_fantasia']);
                                $set('email', $request['estabelecimento']['email']);
                                $set('phone', '(' . $request['estabelecimento']['ddd1'] . ")" . substr_replace($request['estabelecimento']['telefone1'], '-', 4, 0));

                            }))
                            ->columnSpan(2),

                    TextInput::make('inscription')
                        ->required()
                        ->label('Inscrição estadual')
                        ->suffixAction(
                            fn ($set) => Action::make('exempt-action')
                                ->icon('heroicon-s-x-circle')
                                ->action(function () use ($set) {
                                    $set('inscription', 'ISENTO');
                                })->label("Isento")
                        ),

                ])
                ->columns(3),

                Grid::make()->schema([

                    TextInput::make('business_name')
                        ->label('Razão social')
                        ->minLength(3)
                        ->required(),

                    TextInput::make('fantasy_name')
                        ->label('Nome fantasia')
                        ->minLength(3)
                        ->required(),

                ])
                ->columns(1),

                Grid::make()->schema([

                    TextInput::make('email')
                        ->email()
                        ->required(),

                    PhoneNumber::make('phone')
                        ->label('Telefone')
                        ->required()
                        ->tel(),

                ])
                ->columns(2),

                Grid::make()->schema([

                    PhoneNumber::make('phone_fix')
                        ->label('Telefone Fixo')
                        ->required()
                        ->tel(),

                    TextInput::make('contact_name')
                        ->label('Contato')
                        ->required(),

                ])
                ->columns(2),

                Grid::make()->schema([

                    /* Select::make('employee_id')->options(
                        Employee::join('employee_groups', 'employees.employee_group_id', '=', 'employee_groups.id')
                            ->where('employee_groups.is_seller', 1)
                            ->pluck('employees.name', 'employees.id')
                    )
                    ->searchable()
                    ->required()
                    ->label('Vendedor responsável'), */

                ])
                ->columns(1),

            ];

        }

        if ($section == "address") {

            return [

                Grid::make()
                ->schema([

                    CepInput::make('address.postal_code')
                        ->viaCep(
                            mode: 'none',
                            errorMessage: 'Revise o CEP.',
                            setFields: [
                                'address.street'     => 'logradouro',
                                'address.complement' => 'complemento',
                                'address.district'   => 'bairro',
                                'address.city_id' => 'city_id',
                                'address.state_id' => 'state_id',
                            ],
                            citiesTable: 'cities',
                            ibgeColumn: 'ibge_code',
                        )
                        ->label('CEP')
                        ->required()
                        ->live(true)
                        ->columnSpan(['2xl' => 1]),

                    TextInput::make('address.street')
                        ->required()
                        ->label('Logradouro')
                        ->columnSpan(['2xl' => 3]),

                    TextInput::make('address.number')
                        ->label('Número'),

                ])
                ->columns(5),

                Grid::make()->schema([

                    TextInput::make('address.district')
                        ->label('Bairro'),

                    TextInput::make('address.complement')
                        ->label('Complemento'),

                    Select::make('address.city_id')
                        ->options(City::all()->pluck('name', 'id'))
                        ->searchable()
                        ->required()
                        ->extraAttributes(["class" => "pointer-events-none disabled"])
                        ->label('Cidade'),

                    Select::make('address.state_id')->options(State::all()->pluck('initials', 'id'))
                        ->searchable()
                        ->required()
                        ->extraAttributes(["class" => "pointer-events-none disabled"])
                        ->label('Estado'),

                ])
                ->columns(2),

            ];

        }

        if ($section == "responsibleInfo") {

            return [

                Grid::make()->schema([

                    TextInput::make('resp_name')
                        ->label('Nome do Responsável')
                        ->required()
                        ->columnSpan(2),

                    TextInput::make('resp_cpf')
                        ->mask("999.999.999-99")
                        ->label('CPF do Responsável')
                        ->validationAttribute('CPF')
                        ->required(),

                ])
                ->columns(3),

                Grid::make()->schema([

                    TextInput::make('resp_email')
                        ->email()
                        ->label('Email do Responsável')
                        ->required(),

                    PhoneNumber::make('resp_phone')
                        ->label('Telefone do Responsável')
                        ->required()
                        ->tel(),

                ])
                ->columns(2),

            ];

        }


        return [

            Toggle::make('active')
                ->label('Status')
                ->helperText('Define se o Integrador tem acesso ao sistema.')
                ->onColor('success')
                ->offColor('danger')
                ->default(1)
                ->inline(false),

            ToggleButtons::make('required_term')
                ->label('Termo Obrigatório?')
                ->boolean()
                ->grouped()
                ->helperText('Define se o termo de cadastro é ou não obrigatório.')
                ->default(false)
                ->inline(false),

            Placeholder::make('created_at')
                ->label('Criado em')
                ->content(fn (Accredited $record): ?string => $record->created_at?->diffForHumans())
                ->hidden(function ($record) {
                    return $record != null ? false : true;
                }),

            Placeholder::make('updated_at')
                ->label('Última atualização')
                ->content(fn (Accredited $record): ?string => $record->updated_at?->diffForHumans())
                ->hidden(function ($record) {
                    return $record != null ? false : true;
                }),

        ];

    }

}

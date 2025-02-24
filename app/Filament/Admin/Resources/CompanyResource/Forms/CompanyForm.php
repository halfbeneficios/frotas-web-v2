<?php

namespace CompanyResource\Filament\Admin\Resources\CompanyResource\Forms;

use App\Enums\TypeCompany;
use App\Models\City;
use App\Models\Company;
use App\Models\State;
use Filament\Forms\Form;
use Campidellis\FilamentHelpers\Contracts\FormBuilder;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Leandrocfe\FilamentPtbrFormFields\PhoneNumber;
use Michaeld555\CepInput;
use Illuminate\Support\Str;

class CompanyForm extends FormBuilder
{

    public function form(Form $form): Form
    {

        return $form
            ->schema([

                Group::make()
                    ->schema([

                        Section::make('Dados da Empresa')
                            ->schema(static::getFormSchema('company'))
                            ->columns(2),

                        Section::make('Endereço da Empresa')
                            ->schema(static::getFormSchema('address'))
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

        if ($section == "company") {

            return [

                Hidden::make('inscription')
                    ->default(Str::upper(Str::random(8))),

                FileUpload::make('logo_path')
                    ->label('Logo')
                    ->disk('s3')
                    ->directory('company-photos/' . Str::uuid())
                    ->avatar()
                    ->image()
                    ->visibility('public')
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

                    TextInput::make('state_register')
                        ->required()
                        ->label('Inscrição Estadual')
                        ->suffixAction(
                            fn ($set) => Action::make('exempt-action')
                                ->icon('heroicon-s-x-circle')
                                ->action(function () use ($set) {
                                    $set('state_register', 'ISENTO');
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

                    MarkdownEditor::make('observation')
                        ->label('Observações')
                        ->disableAllToolbarButtons()
                        ->columnSpan('full'),

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

                    Select::make('address.state_id')
                        ->options(State::all()->pluck('initials', 'id'))
                        ->searchable()
                        ->required()
                        ->extraAttributes(["class" => "pointer-events-none disabled"])
                        ->label('Estado'),

                ])
                ->columns(2),

            ];

        }


        return [

            Toggle::make('active')
                ->label('Status')
                ->helperText('Define se a empresa está ativa.')
                ->onColor('success')
                ->offColor('danger')
                ->default(1)
                ->inline(false),

            Select::make('type_company')
                ->options(
                    TypeCompany::class
                )
                ->searchable()
                ->required()
                ->label('Tipo de Empresa'),

            Placeholder::make('created_at')
                ->label('Criado em')
                ->content(fn (Company $record): ?string => $record->created_at?->diffForHumans())
                ->hidden(function ($record) {
                    return $record != null ? false : true;
                }),

            Placeholder::make('updated_at')
                ->label('Última atualização')
                ->content(fn (Company $record): ?string => $record->updated_at?->diffForHumans())
                ->hidden(function ($record) {
                    return $record != null ? false : true;
                }),

        ];

    }

}

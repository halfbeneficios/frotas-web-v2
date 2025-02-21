<?php

namespace ResultCenterResource\Filament\Company\Resources\ResultCenterResource\Forms;

use App\Actions\GetCompany;
use App\Models\City;
use App\Models\State;
use App\Models\Subsidiary;
use Filament\Forms\Form;
use Campidellis\FilamentHelpers\Contracts\FormBuilder;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Michaeld555\CepInput;
use Illuminate\Support\Str;

class ResultCenterForm extends FormBuilder
{

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Group::make()
                    ->schema([

                        Section::make()
                            ->schema(static::getFormSchema('info'))
                            ->columns(2),

                        Section::make('Endereço do Centro')
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

        if($section === 'info') {

            return [

                Grid::make()->schema([

                    Hidden::make('code')
                        ->default(Str::upper(Str::random(8))),

                    Hidden::make('company_id')
                        ->default(GetCompany::find()->id),

                    TextInput::make('name')
                        ->label('Nome do Centro')
                        ->required()
                        ->columnSpan('full'),

                    Select::make('subsidiary_id')
                        ->options(Subsidiary::where('company_id', GetCompany::find()->id)->pluck('name', 'id'))
                        ->required()
                        ->searchable()
                        ->label('Filial')
                        ->columnSpan('full'),

                    MarkdownEditor::make('description')
                        ->label('Descrição')
                        ->disableAllToolbarButtons()
                        ->columnSpan('full'),

                ])->columns(2),

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
                        ->live(true)
                        ->required()
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

        return [

            Toggle::make('active')
                ->label('Status')
                ->onColor('success')
                ->offColor('danger')
                ->default(1)
                ->required()
                ->helperText('Define se esse centro está ativo ou inativo.')
                ->inline(false)
                ->live(),

        ];

    }

}

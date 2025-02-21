<?php

namespace DepartmentResource\Filament\Company\Resources\DepartmentResource\Forms;

use App\Actions\GetCompany;
use Filament\Forms\Form;
use Campidellis\FilamentHelpers\Contracts\FormBuilder;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class DepartmentForm extends FormBuilder
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
                        ->label('Nome do Departamento')
                        ->required()
                        ->columnSpan('full'),

                    MarkdownEditor::make('description')
                        ->label('Descrição')
                        ->disableAllToolbarButtons()
                        ->columnSpan('full'),

                ])->columns(2),

            ];

        }

        return [

            Toggle::make('active')
                ->label('Status')
                ->onColor('success')
                ->offColor('danger')
                ->default(1)
                ->required()
                ->helperText('Define se esse departamento está ativo ou inativo.')
                ->inline(false)
                ->live(),

        ];

    }

}

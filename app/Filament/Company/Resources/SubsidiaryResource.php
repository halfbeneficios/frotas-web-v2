<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\SubsidiaryResource\Pages;
use App\Models\Subsidiary;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use SubsidiaryResource\Filament\Company\Resources\SubsidiaryResource\Forms\SubsidiaryForm;
use SubsidiaryResource\Filament\Company\Resources\SubsidiaryResource\Tables\SubsidiaryTable;

class SubsidiaryResource extends Resource
{

    protected static ?string $model = Subsidiary::class;

    protected static ?string $modelLabel = 'Filial';

    protected static ?string $pluralLabel = 'Filiais';

    protected static ?string $navigationLabel = 'Filiais';

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return SubsidiaryForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return SubsidiaryTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubsidiaries::route('/'),
            'create' => Pages\CreateSubsidiary::route('/create'),
            'edit' => Pages\EditSubsidiary::route('/{record}/edit'),
        ];
    }

}

<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\CostCenterResource\Pages;
use App\Models\CostCenter;
use CostCenterResource\Filament\Company\Resources\CostCenterResource\Forms\CostCenterForm;
use CostCenterResource\Filament\Company\Resources\CostCenterResource\Tables\CostCenterTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class CostCenterResource extends Resource
{

    protected static ?string $model = CostCenter::class;

    protected static ?string $modelLabel = 'Centro';

    protected static ?string $pluralLabel = 'Centros de Custo';

    protected static ?string $navigationLabel = 'Centros de Custo';

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return CostCenterForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return CostCenterTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCostCenters::route('/'),
            'create' => Pages\CreateCostCenter::route('/create'),
            'edit' => Pages\EditCostCenter::route('/{record}/edit'),
        ];
    }

}

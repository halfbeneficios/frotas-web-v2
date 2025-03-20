<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\ResultCenterResource\Pages;
use App\Models\ResultCenter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use ResultCenterResource\Filament\Company\Resources\ResultCenterResource\Forms\ResultCenterForm;
use ResultCenterResource\Filament\Company\Resources\ResultCenterResource\Tables\ResultCenterTable;

class ResultCenterResource extends Resource
{

    protected static ?string $model = ResultCenter::class;

    protected static ?string $modelLabel = 'Centro';

    protected static ?string $pluralLabel = 'Centros de Resultado';

    protected static ?string $navigationLabel = 'Centros de Resultado';

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return ResultCenterForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return ResultCenterTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResultCenters::route('/'),
            'create' => Pages\CreateResultCenter::route('/create'),
            'edit' => Pages\EditResultCenter::route('/{record}/edit'),
        ];
    }

}

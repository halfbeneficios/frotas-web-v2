<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\FleetTypeResource\Pages;
use App\Models\FleetType;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use FleetTypeResource\Filament\Company\Resources\FleetTypeResource\Forms\FleetTypeForm;
use FleetTypeResource\Filament\Company\Resources\FleetTypeResource\Tables\FleetTypeTable;
class FleetTypeResource extends Resource
{

    protected static ?string $model = FleetType::class;

    protected static ?string $modelLabel = 'Tipo';

    protected static ?string $pluralLabel = 'Tipos de Frota';

    protected static ?string $navigationLabel = 'Tipos de Frota';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return FleetTypeForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return FleetTypeTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFleetTypes::route('/'),
            'create' => Pages\CreateFleetType::route('/create'),
            'edit' => Pages\EditFleetType::route('/{record}/edit'),
        ];
    }

}

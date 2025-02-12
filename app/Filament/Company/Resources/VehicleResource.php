<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\VehicleResource\Pages;
use App\Models\Vehicle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use VehicleResource\Filament\Company\Resources\VehicleResource\Forms\VehicleForm;
use VehicleResource\Filament\Company\Resources\VehicleResource\Tables\VehicleTable;

class VehicleResource extends Resource
{

    protected static ?string $model = Vehicle::class;

    protected static ?string $modelLabel = 'Veículo';

    protected static ?string $pluralLabel = 'Veículos';

    protected static ?string $navigationLabel = 'Veículos';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return VehicleForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return VehicleTable::make($table);;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }

}

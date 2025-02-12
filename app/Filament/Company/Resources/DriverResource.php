<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\DriverResource\Pages;
use App\Models\Driver;
use DriverResource\Filament\Company\Resources\DriverResource\Forms\DriverForm;
use DriverResource\Filament\Company\Resources\DriverResource\Tables\DriverTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class DriverResource extends Resource
{

    protected static ?string $model = Driver::class;

    protected static ?string $modelLabel = 'Motorista';

    protected static ?string $pluralLabel = 'Motoristas';

    protected static ?string $navigationLabel = 'Motoristas';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return DriverForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return DriverTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDrivers::route('/'),
            'create' => Pages\CreateDriver::route('/create'),
            'edit' => Pages\EditDriver::route('/{record}/edit'),
        ];
    }

}

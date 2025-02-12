<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\InfractionResource\Pages;
use App\Models\Infraction;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use InfractionResource\Filament\Company\Resources\InfractionResource\Forms\InfractionForm;
use InfractionResource\Filament\Company\Resources\InfractionResource\Tables\InfractionTable;

class InfractionResource extends Resource
{

    protected static ?string $model = Infraction::class;

    protected static ?string $modelLabel = 'Infração';

    protected static ?string $pluralLabel = 'Infrações de Trânsito';

    protected static ?string $navigationLabel = 'Infrações de Trânsito';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return InfractionForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return InfractionTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInfractions::route('/'),
            'create' => Pages\CreateInfraction::route('/create'),
            'edit' => Pages\EditInfraction::route('/{record}/edit'),
        ];
    }

}

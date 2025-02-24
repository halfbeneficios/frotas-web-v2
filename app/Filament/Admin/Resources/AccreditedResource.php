<?php

namespace App\Filament\Admin\Resources;

use AccreditedResource\Filament\Admin\Resources\AccreditedResource\Forms\AccreditedForm;
use AccreditedResource\Filament\Admin\Resources\AccreditedResource\Tables\AccreditedTable;
use App\Filament\Admin\Resources\AccreditedResource\Pages;
use App\Models\Accredited;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class AccreditedResource extends Resource
{

    protected static ?string $model = Accredited::class;

    protected static ?string $modelLabel = 'Credenciada';

    protected static ?string $pluralLabel = 'Credenciadas';

    protected static ?string $navigationLabel = 'Credenciadas';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Administrativo';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return AccreditedForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return AccreditedTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccrediteds::route('/'),
            'create' => Pages\CreateAccredited::route('/create'),
            'edit' => Pages\EditAccredited::route('/{record}/edit'),
        ];
    }

}

<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\ManagerResource\Pages;
use App\Models\Manager;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use ManagerResource\Filament\Company\Resources\ManagerResource\Forms\ManagerForm;
use ManagerResource\Filament\Company\Resources\ManagerResource\Tables\ManagerTable;

class ManagerResource extends Resource
{

    protected static ?string $model = Manager::class;

    protected static ?string $modelLabel = 'Gestor';

    protected static ?string $pluralLabel = 'Gestores';

    protected static ?string $navigationLabel = 'Gestores';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return ManagerForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return ManagerTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManagers::route('/'),
            'create' => Pages\CreateManager::route('/create'),
            'edit' => Pages\EditManager::route('/{record}/edit'),
        ];
    }

}

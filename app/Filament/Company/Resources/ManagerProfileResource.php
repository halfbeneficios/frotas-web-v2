<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\ManagerProfileResource\Pages;
use App\Models\ManagerProfile;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use ManagerProfileResource\Filament\Company\Resources\ManagerProfileResource\Forms\ManagerProfileForm;
use ManagerProfileResource\Filament\Company\Resources\ManagerProfileResource\Tables\ManagerProfileTable;

class ManagerProfileResource extends Resource
{

    protected static ?string $model = ManagerProfile::class;

    protected static ?string $modelLabel = 'Perfil';

    protected static ?string $pluralLabel = 'Perfis de Gestores';

    protected static ?string $navigationLabel = 'Perfis de Gestores';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return ManagerProfileForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return ManagerProfileTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManagerProfiles::route('/'),
            'create' => Pages\CreateManagerProfile::route('/create'),
            'edit' => Pages\EditManagerProfile::route('/{record}/edit'),
        ];
    }

}

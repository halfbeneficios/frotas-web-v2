<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EmployeeProfileResource\Pages;
use App\Models\EmployeeProfile;
use EmployeeProfileResource\Filament\Admin\Resources\EmployeeProfileResource\Forms\EmployeeProfileForm;
use EmployeeProfileResource\Filament\Admin\Resources\EmployeeProfileResource\Tables\EmployeeProfileTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class EmployeeProfileResource extends Resource
{

    protected static ?string $model = EmployeeProfile::class;

    protected static ?string $modelLabel = 'Perfil';

    protected static ?string $pluralLabel = 'Perfis De Colaboradores';

    protected static ?string $navigationLabel = 'Perfis De Colaboradores';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return EmployeeProfileForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return EmployeeProfileTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployeeProfiles::route('/'),
            'create' => Pages\CreateEmployeeProfile::route('/create'),
            'edit' => Pages\EditEmployeeProfile::route('/{record}/edit'),
        ];
    }

}

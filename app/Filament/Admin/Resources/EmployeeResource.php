<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use EmployeeResource\Filament\Admin\Resources\EmployeeResource\Forms\EmployeeForm;
use EmployeeResource\Filament\Admin\Resources\EmployeeResource\Tables\EmployeeTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class EmployeeResource extends Resource
{

    protected static ?string $model = Employee::class;

    protected static ?string $modelLabel = 'Colaborador';

    protected static ?string $pluralLabel = 'Colaboradores';

    protected static ?string $navigationLabel = 'Colaboradores';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Administrativo';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return EmployeeForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return EmployeeTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }

}

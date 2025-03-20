<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\DepartmentResource\Pages;
use App\Models\Department;
use DepartmentResource\Filament\Company\Resources\DepartmentResource\Forms\DepartmentForm;
use DepartmentResource\Filament\Company\Resources\DepartmentResource\Tables\DepartmentTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class DepartmentResource extends Resource
{

    protected static ?string $model = Department::class;

    protected static ?string $modelLabel = 'Departamento';

    protected static ?string $pluralLabel = 'Departamentos';

    protected static ?string $navigationLabel = 'Departamentos';

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return DepartmentForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return DepartmentTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }

}

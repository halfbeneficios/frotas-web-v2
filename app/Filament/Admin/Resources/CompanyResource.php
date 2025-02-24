<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyResource\Pages;
use App\Models\Company;
use CompanyResource\Filament\Admin\Resources\CompanyResource\Forms\CompanyForm;
use CompanyResource\Filament\Admin\Resources\CompanyResource\Tables\CompanyTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class CompanyResource extends Resource
{

    protected static ?string $model = Company::class;

    protected static ?string $modelLabel = 'Empresa';

    protected static ?string $pluralLabel = 'Empresas';

    protected static ?string $navigationLabel = 'Empresas';

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Administrativo';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return CompanyForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return CompanyTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }

}

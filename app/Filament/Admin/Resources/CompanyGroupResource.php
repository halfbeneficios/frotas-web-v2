<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyGroupResource\Pages;
use App\Models\CompanyGroup;
use CompanyGroupResource\Filament\Admin\Resources\CompanyGroupResource\Forms\CompanyGroupForm;
use CompanyGroupResource\Filament\Admin\Resources\CompanyGroupResource\Tables\CompanyGroupTable;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class CompanyGroupResource extends Resource
{

    protected static ?string $model = CompanyGroup::class;

    protected static ?string $modelLabel = 'Grupo';

    protected static ?string $pluralLabel = 'Grupo de Empresas';

    protected static ?string $navigationLabel = 'Grupo de Empresas';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return CompanyGroupForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return CompanyGroupTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyGroups::route('/'),
            'create' => Pages\CreateCompanyGroup::route('/create'),
            'edit' => Pages\EditCompanyGroup::route('/{record}/edit'),
        ];
    }

}

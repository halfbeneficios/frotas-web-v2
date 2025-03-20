<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SystemAlertResource\Pages;
use App\Models\SystemAlert;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use SystemAlertResource\Filament\Admin\Resources\SystemAlertResource\Forms\SystemAlertForm;
use SystemAlertResource\Filament\Admin\Resources\SystemAlertResource\Tables\SystemAlertTable;

class SystemAlertResource extends Resource
{

    protected static ?string $model = SystemAlert::class;

    protected static ?string $modelLabel = 'Aviso';

    protected static ?string $pluralLabel = 'Avisos do Sistema';

    protected static ?string $navigationLabel = 'Avisos do Sistema';

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'Gestão do Sistema';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return SystemAlertForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return SystemAlertTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSystemAlerts::route('/'),
            'create' => Pages\CreateSystemAlert::route('/create'),
            'edit' => Pages\EditSystemAlert::route('/{record}/edit'),
        ];
    }

}

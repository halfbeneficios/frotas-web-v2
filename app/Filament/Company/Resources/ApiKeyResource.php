<?php

namespace App\Filament\Company\Resources;

use ApiKeyResource\Filament\Company\Resources\ApiKeyResource\Forms\ApiKeyForm;
use ApiKeyResource\Filament\Company\Resources\ApiKeyResource\Tables\ApiKeyTable;
use App\Filament\Company\Resources\ApiKeyResource\Pages;
use App\Models\ApiKey;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class ApiKeyResource extends Resource
{

    protected static ?string $model = ApiKey::class;

    protected static ?string $modelLabel = 'Integração';

    protected static ?string $pluralLabel = 'Integração com API';

    protected static ?string $navigationLabel = 'Integração com API';

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    protected static bool $shouldRegisterNavigation = false;

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function form(Form $form): Form
    {
        return ApiKeyForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return ApiKeyTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApiKeys::route('/'),
            'create' => Pages\CreateApiKey::route('/create'),
            'edit' => Pages\EditApiKey::route('/{record}/edit'),
        ];
    }

}

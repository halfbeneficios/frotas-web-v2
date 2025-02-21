<?php

namespace App\Filament\Company\Resources;

use AccreditedGroupResource\Filament\Company\Resources\AccreditedGroupResource\Forms\AccreditedGroupForm;
use AccreditedGroupResource\Filament\Company\Resources\AccreditedGroupResource\Tables\AccreditedGroupTable;
use App\Filament\Company\Resources\AccreditedGroupResource\Pages;
use App\Models\AccreditedGroup;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class AccreditedGroupResource extends Resource
{

    protected static ?string $model = AccreditedGroup::class;

    protected static ?string $modelLabel = 'Grupo';

    protected static ?string $pluralLabel = 'Grupos de Credenciadas';

    protected static ?string $navigationLabel = 'Grupos de Credenciadas';

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationGroup = 'Operacional';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return AccreditedGroupForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return AccreditedGroupTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccreditedGroups::route('/'),
            'create' => Pages\CreateAccreditedGroup::route('/create'),
            'edit' => Pages\EditAccreditedGroup::route('/{record}/edit'),
        ];
    }

}

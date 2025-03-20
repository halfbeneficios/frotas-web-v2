<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MechanicalItemResource\Pages;
use App\Models\MechanicalItem;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use MechanicalItemResource\Filament\Admin\Resources\MechanicalItemResource\Forms\MechanicalItemForm;
use MechanicalItemResource\Filament\Admin\Resources\MechanicalItemResource\Tables\MechanicalItemTable;

class MechanicalItemResource extends Resource
{

    protected static ?string $model = MechanicalItem::class;

    protected static ?string $modelLabel = 'Peça/Serviço';

    protected static ?string $pluralLabel = 'Peças e Serviços';

    protected static ?string $navigationLabel = 'Peças e Serviços';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return MechanicalItemForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return MechanicalItemTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMechanicalItems::route('/'),
            'create' => Pages\CreateMechanicalItem::route('/create'),
            'edit' => Pages\EditMechanicalItem::route('/{record}/edit'),
        ];
    }

}

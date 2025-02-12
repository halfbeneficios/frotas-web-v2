<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\TagResource\Pages;
use App\Models\Tag;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use TagResource\Filament\Company\Resources\TagResource\Forms\TagForm;
use TagResource\Filament\Company\Resources\TagResource\Tables\TagTable;

class TagResource extends Resource
{

    protected static ?string $model = Tag::class;

    protected static ?string $modelLabel = 'Tag';

    protected static ?string $pluralLabel = 'Tags de Identificação';

    protected static ?string $navigationLabel = 'Tags de Identificação';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return TagForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return TagTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }

}

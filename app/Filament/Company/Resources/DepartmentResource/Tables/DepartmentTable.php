<?php

namespace DepartmentResource\Filament\Company\Resources\DepartmentResource\Tables;

use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Campidellis\FilamentHelpers\Contracts\TableBuilder;

class DepartmentTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table->columns([
             //
         ])
         ->filters([
             //
         ])
         ->actions([
             Tables\Actions\EditAction::make(),
         ])
         ->bulkActions([
             Tables\Actions\BulkActionGroup::make([
                 Tables\Actions\DeleteBulkAction::make(),
             ]),
         ]);
    }
}

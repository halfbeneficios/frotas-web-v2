<?php

namespace EmployeeProfileResource\Filament\Admin\Resources\EmployeeProfileResource\Tables;

use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Campidellis\FilamentHelpers\Contracts\TableBuilder;

class EmployeeProfileTable extends TableBuilder
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

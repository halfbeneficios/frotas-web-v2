<?php

namespace App\Filament\Admin\Resources\MechanicalItemResource\Pages;

use App\Filament\Admin\Resources\MechanicalItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMechanicalItems extends ListRecords
{
    protected static string $resource = MechanicalItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

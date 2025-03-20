<?php

namespace App\Filament\Accredited\Resources\MechanicalItemResource\Pages;

use App\Filament\Accredited\Resources\MechanicalItemResource;
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

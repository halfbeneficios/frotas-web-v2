<?php

namespace App\Filament\Accredited\Resources\MechanicalItemResource\Pages;

use App\Filament\Accredited\Resources\MechanicalItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMechanicalItem extends EditRecord
{
    protected static string $resource = MechanicalItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

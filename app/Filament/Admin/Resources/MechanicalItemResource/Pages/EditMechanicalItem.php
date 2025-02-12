<?php

namespace App\Filament\Admin\Resources\MechanicalItemResource\Pages;

use App\Filament\Admin\Resources\MechanicalItemResource;
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

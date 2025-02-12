<?php

namespace App\Filament\Company\Resources\ManagerResource\Pages;

use App\Filament\Company\Resources\ManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManager extends EditRecord
{
    protected static string $resource = ManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

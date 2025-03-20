<?php

namespace App\Filament\Company\Resources\SystemAlertResource\Pages;

use App\Filament\Company\Resources\SystemAlertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSystemAlert extends EditRecord
{
    protected static string $resource = SystemAlertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

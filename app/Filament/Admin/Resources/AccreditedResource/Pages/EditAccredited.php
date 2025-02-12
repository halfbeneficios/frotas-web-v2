<?php

namespace App\Filament\Admin\Resources\AccreditedResource\Pages;

use App\Filament\Admin\Resources\AccreditedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccredited extends EditRecord
{
    protected static string $resource = AccreditedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

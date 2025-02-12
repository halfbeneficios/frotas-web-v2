<?php

namespace App\Filament\Company\Resources\AccreditedGroupResource\Pages;

use App\Filament\Company\Resources\AccreditedGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccreditedGroup extends EditRecord
{
    protected static string $resource = AccreditedGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

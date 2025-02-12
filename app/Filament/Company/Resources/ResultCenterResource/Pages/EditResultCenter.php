<?php

namespace App\Filament\Company\Resources\ResultCenterResource\Pages;

use App\Filament\Company\Resources\ResultCenterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultCenter extends EditRecord
{
    protected static string $resource = ResultCenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

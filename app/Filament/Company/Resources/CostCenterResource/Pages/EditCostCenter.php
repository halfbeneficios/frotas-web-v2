<?php

namespace App\Filament\Company\Resources\CostCenterResource\Pages;

use App\Filament\Company\Resources\CostCenterResource;
use Filament\Resources\Pages\EditRecord;

class EditCostCenter extends EditRecord
{

    protected static string $resource = CostCenterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeUpdate(array $data): array
    {
        return $data;
    }

}

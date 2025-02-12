<?php

namespace App\Filament\Company\Resources\CostCenterResource\Pages;

use App\Filament\Company\Resources\CostCenterResource;
use App\Models\Address;
use Filament\Resources\Pages\CreateRecord;

class CreateCostCenter extends CreateRecord
{

    protected static string $resource = CostCenterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $address = Address::create($data['address']);

        $data['address_id'] = $address->id;

        return $data;

    }

}

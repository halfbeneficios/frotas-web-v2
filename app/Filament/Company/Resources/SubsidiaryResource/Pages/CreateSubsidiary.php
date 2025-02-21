<?php

namespace App\Filament\Company\Resources\SubsidiaryResource\Pages;

use App\Filament\Company\Resources\SubsidiaryResource;
use App\Models\Address;
use Filament\Resources\Pages\CreateRecord;

class CreateSubsidiary extends CreateRecord
{

    protected static string $resource = SubsidiaryResource::class;

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

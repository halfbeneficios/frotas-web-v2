<?php

namespace App\Filament\Company\Resources\SubsidiaryResource\Pages;

use App\Filament\Company\Resources\SubsidiaryResource;
use App\Models\Address;
use Filament\Resources\Pages\EditRecord;

class EditSubsidiary extends EditRecord
{

    protected static string $resource = SubsidiaryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {

        $address = Address::find($data['address_id']);

        $data['address'] = $address->toArray();

        return $data;

    }

    protected function mutateFormDataBeforeSave(array $data): array
    {

        $address = Address::find($this->data['address']['id']);

        $address->update($data['address']);

        return $data;

    }

}

<?php

namespace App\Filament\Company\Resources\ResultCenterResource\Pages;

use App\Filament\Company\Resources\ResultCenterResource;
use App\Models\Address;
use Filament\Resources\Pages\CreateRecord;

class CreateResultCenter extends CreateRecord
{

    protected static string $resource = ResultCenterResource::class;

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

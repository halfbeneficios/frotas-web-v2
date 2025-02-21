<?php

namespace App\Filament\Company\Resources\FleetTypeResource\Pages;

use App\Filament\Company\Resources\FleetTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFleetType extends CreateRecord
{

    protected static string $resource = FleetTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}

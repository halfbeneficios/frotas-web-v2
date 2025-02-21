<?php

namespace App\Filament\Company\Resources\FleetTypeResource\Pages;

use App\Filament\Company\Resources\FleetTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFleetTypes extends ListRecords
{

    protected static string $resource = FleetTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Actions\CreateAction::make(),
            
        ];
    }

}

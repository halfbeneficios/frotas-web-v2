<?php

namespace App\Filament\Company\Resources\ResultCenterResource\Pages;

use App\Filament\Company\Resources\ResultCenterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultCenters extends ListRecords
{

    protected static string $resource = ResultCenterResource::class;

    protected function getHeaderActions(): array
    {

        return [

            Actions\CreateAction::make(),
            
        ];

    }

}

<?php

namespace App\Filament\Company\Resources\ManagerProfileResource\Pages;

use App\Filament\Company\Resources\ManagerProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManagerProfiles extends ListRecords
{
    protected static string $resource = ManagerProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

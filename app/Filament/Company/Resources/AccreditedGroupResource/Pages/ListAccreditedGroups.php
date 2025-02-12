<?php

namespace App\Filament\Company\Resources\AccreditedGroupResource\Pages;

use App\Filament\Company\Resources\AccreditedGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccreditedGroups extends ListRecords
{
    protected static string $resource = AccreditedGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

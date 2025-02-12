<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeProfiles extends ListRecords
{
    protected static string $resource = EmployeeProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

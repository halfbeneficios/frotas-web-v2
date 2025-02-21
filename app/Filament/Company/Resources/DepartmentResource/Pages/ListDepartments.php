<?php

namespace App\Filament\Company\Resources\DepartmentResource\Pages;

use App\Filament\Company\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepartments extends ListRecords
{
    
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {

        return [

            Actions\CreateAction::make(),

        ];

    }

}

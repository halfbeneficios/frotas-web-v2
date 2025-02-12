<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployeeProfile extends CreateRecord
{
    protected static string $resource = EmployeeProfileResource::class;
}

<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeeProfile extends EditRecord
{
    protected static string $resource = EmployeeProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

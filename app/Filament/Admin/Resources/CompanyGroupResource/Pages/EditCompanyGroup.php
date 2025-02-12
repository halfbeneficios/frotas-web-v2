<?php

namespace App\Filament\Admin\Resources\CompanyGroupResource\Pages;

use App\Filament\Admin\Resources\CompanyGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyGroup extends EditRecord
{
    protected static string $resource = CompanyGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

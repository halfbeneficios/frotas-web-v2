<?php

namespace App\Filament\Company\Resources\ApiKeyResource\Pages;

use App\Filament\Company\Resources\ApiKeyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApiKey extends CreateRecord
{
    protected static string $resource = ApiKeyResource::class;
}

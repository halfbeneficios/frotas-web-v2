<?php

namespace App\Filament\Accredited\Resources\ApiKeyResource\Pages;

use App\Filament\Accredited\Resources\ApiKeyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApiKey extends CreateRecord
{
    protected static string $resource = ApiKeyResource::class;
}

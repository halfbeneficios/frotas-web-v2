<?php

namespace App\Filament\Company\Resources\TagResource\Pages;

use App\Filament\Company\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;
}

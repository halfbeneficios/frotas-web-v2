<?php

namespace App\Filament\Accredited\Resources\ReportResource\Pages;

use App\Filament\Accredited\Resources\ReportResource;
use Filament\Resources\Pages\ListRecords;

class ListReports extends ListRecords
{

    protected static string $resource = ReportResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

}

<?php

namespace App\Filament\Admin\Resources\AccreditedResource\Pages;

use App\Filament\Admin\Resources\AccreditedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccrediteds extends ListRecords
{

    protected static string $resource = AccreditedResource::class;

    protected function getHeaderActions(): array
    {

        return [

            Actions\CreateAction::make()
                ->label('Cadastrar Credenciada')
                ->icon('heroicon-m-plus'),

        ];

    }

}

<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

class ListEmployeeProfiles extends ListRecords
{

    protected static string $resource = EmployeeProfileResource::class;

    protected function getHeaderActions(): array
    {

        return [

            Actions\CreateAction::make()
                ->label('Cadastrar Perfil')
                ->icon('heroicon-m-plus'),

        ];

    }

}

<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployeeProfile extends CreateRecord
{

    protected static string $resource = EmployeeProfileResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {

        $profile = $this->getRecord();

        RecentActivity::create("Criou o perfil de colaborador de ID: ".$profile->id);

    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Perfis')
            ->body('O perfil de colaboradores foi criado com sucesso.');
    }

}

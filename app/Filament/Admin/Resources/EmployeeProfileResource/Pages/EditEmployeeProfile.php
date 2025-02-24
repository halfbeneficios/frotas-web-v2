<?php

namespace App\Filament\Admin\Resources\EmployeeProfileResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\EmployeeProfileResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditEmployeeProfile extends EditRecord
{

    protected static string $resource = EmployeeProfileResource::class;

    protected static ?string $navigationLabel = 'Editar Perfil';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterSave(): void
    {
        RecentActivity::create("Editou o perfil de colaborador de ID: ".$this->data['id']);
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Perfis')
            ->body('O perfil de colaborador foi atualizado com sucesso.');
    }

}

<?php

namespace App\Filament\Admin\Resources\AccreditedResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\AccreditedResource;
use App\Models\AccreditedResponsible;
use App\Models\Address;
use App\Models\User;
use Filament\Resources\Pages\EditRecord;

class EditAccredited extends EditRecord
{

    protected static string $resource = AccreditedResource::class;

    protected bool $sendedEmail = true;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {


        $address = Address::find($data['address_id']);

        $responsible = AccreditedResponsible::find($data['accredited_responsible_id']);

        $data['responsible'] = $responsible->toArray();

        $data['address'] = $address->toArray();

        return $data;

    }

    protected function mutateFormDataBeforeSave(array $data): array
    {

        $address = Address::find($this->data['address']['id']);

        $responsible = AccreditedResponsible::find($this->data['responsible']['id']);

        $responsible->update($data['responsible']);

        $address->update($data['address']);

        $user = User::find($this->data['user_id']);

        $user->update([
            'name' => $this->data['business_name'],
            'email' => $this->data['email'],
        ]);

        return $data;

    }

    protected function getSavedNotificationTitle(): ?string
    {
        return "Credenciada atualizada com sucesso.";
    }

    protected function afterSave(): void
    {
        RecentActivity::create("Editou a credenciada de ID: ".$this->data['id']);
    }

}

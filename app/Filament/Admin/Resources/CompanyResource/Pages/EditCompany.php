<?php

namespace App\Filament\Admin\Resources\CompanyResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\CompanyResource;
use App\Models\Address;
use App\Models\User;
use Filament\Resources\Pages\EditRecord;

class EditCompany extends EditRecord
{

    protected static string $resource = CompanyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {

        $address = Address::find($data['address_id']);

        $data['address'] = $address->toArray();

        return $data;

    }

    protected function mutateFormDataBeforeSave(array $data): array
    {

        $address = Address::find($this->data['address']['id']);

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
        return "Integrador atualizado com sucesso.";
    }

    protected function afterSave(): void
    {
        RecentActivity::create("Editou a empresa de ID: ".$this->data['id']);
    }

}

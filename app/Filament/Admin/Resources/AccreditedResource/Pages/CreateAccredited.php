<?php

namespace App\Filament\Admin\Resources\AccreditedResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\AccreditedResource;
use App\Models\AccreditedResponsible;
use App\Models\Address;
use App\Models\User;
use App\Notifications\Accredited\NewAccredited;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAccredited extends CreateRecord
{

    protected static string $resource = AccreditedResource::class;

    protected bool $sendedEmail = true;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $address = Address::create($data['address']);

        $responsible = AccreditedResponsible::create($data['responsible']);

        $data['address_id'] = $address->id;

        $password = Str::random(8);

        $user = User::create([
            'type_user_id' => 5,
            'name'         => $this->data['business_name'],
            'email'        => $this->data['email'],
            'password'     => Hash::make($password),
            'password_expires_at'     => now()->addDays(60),
        ]);

        $data['user_id'] = $user->id;

        $data['accredited_responsible_id'] = $responsible->id;

        try {

            $notification = new NewAccredited($user, $password);

            \Illuminate\Support\Facades\Notification::route('mail', $user->email)->notify($notification);

        } catch (\Exception $e) {

            $this->sendedEmail = false;

        }

        return $data;

    }

    protected function getCreatedNotificationTitle(): ?string
    {

        if($this->data['active']) {

            if($this->sendedEmail) {

                return 'Credenciada criada, foi enviado um e-mail com a senha de acesso.';

            } else {

                return 'Credenciada criada, porém falhou ao enviar o e-mail com a senha de acesso.';

            }

        } else {

            return "Credenciada criada com sucesso.";

        }

    }

    protected function afterCreate(): void
    {

        $accredited = $this->getRecord();

        RecentActivity::create("Criou a credenciada de ID: ".$accredited->id);

    }

}

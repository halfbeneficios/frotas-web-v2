<?php

namespace App\Filament\Admin\Resources\CompanyResource\Pages;

use App\Actions\RecentActivity;
use App\Filament\Admin\Resources\CompanyResource;
use App\Models\Address;
use App\Models\User;
use App\Notifications\Company\NewCompany;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateCompany extends CreateRecord
{

    protected static string $resource = CompanyResource::class;

    protected bool $sendedEmail = true;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $address = Address::create($data['address']);

        $data['address_id'] = $address->id;

        $password = Str::random(8);

        $user = User::create([
            'type_user_id' => 3,
            'name'         => $this->data['business_name'],
            'email'        => $this->data['email'],
            'password'     => Hash::make($password),
            'password_expires_at'     => now()->addDays(60),
        ]);

        $data['user_id'] = $user->id;

        try {

            $notification = new NewCompany($user, $password);

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

                return 'Empresa criada, foi enviado um e-mail com a senha de acesso.';

            } else {

                return 'Empresa criada, porém falhou ao enviar o e-mail com a senha de acesso.';

            }

        } else {

            return "Empresa criada com sucesso.";

        }

    }

    protected function afterCreate(): void
    {

        $company = $this->getRecord();

        RecentActivity::create("Criou a empresa de ID: ".$company->id);

    }

}

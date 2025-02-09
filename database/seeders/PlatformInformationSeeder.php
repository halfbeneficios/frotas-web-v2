<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\PlatformInformation;
use Illuminate\Database\Seeder;

class PlatformInformationSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $address = Address::create([
            'street' => 'Rua S 1',
            'number' => 260,
            'district' => 'Setor Bueno',
            'complement' => '',
            'postal_code' => '74230-220',
            'city_id' => 5412,
            'state_id' => 9,
        ]);

        $company = PlatformInformation::create([
            'cnpj' => '43.091.320/0001-07',
            'fantasy_name' => 'HALF BENEFICIOS',
            'business_name' => 'HALF BENEFICIOS LTDA',
            'city_register' => null,
            'state_register' => '108583627',
            'email' => 'atendimento@halfbeneficios.com',
            'phone' => '(62) 99608-0289',
            'phone_fix' => null,
            'cnae' => 'N-8299-7/02',
            'tax_regime' => null,
            'logo_path' => null,
            'responsible_name' => null,
            'responsible_cpf' => null,
            'responsible_birth' => null,
            'responsible_email' => null,
            'responsible_phone' => null,
            'address_id' => $address->id,
            'observation' => null
        ]);

    }

}

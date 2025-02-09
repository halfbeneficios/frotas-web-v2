<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('settings')->insert([
            [
                'id' => 1,
                'type' => 'maintenance',
                'description' => 'Define se o sistema está em modo de manutenção',
                'value' => null,
                'status' => 0
            ]
        ]);

    }

}

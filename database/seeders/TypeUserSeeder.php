<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('type_users')->insert([
            [
                'id' => 1,
                'role' => 'Administrador'
            ],
            [
                'id' => 2,
                'role' => 'Colaborador Interno'
            ],
            [
                'id' => 3,
                'role' => 'Empresa Parceira'
            ],
            [
                'id' => 4,
                'role' => 'Gestor de Frota'
            ],
            [
                'id' => 5,
                'role' => 'Empresa Credenciada'
            ],
            [
                'id' => 6,
                'role' => 'Motorista'
            ],
        ]);

    }

}

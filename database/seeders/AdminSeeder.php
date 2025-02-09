<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'type_user_id' => 1,
            'name' => 'Administrador do Sistema',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

    }

}

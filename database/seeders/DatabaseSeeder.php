<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            TypeUserSeeder::class,
            RegionSeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            BankSeeder::class,
            SettingSeeder::class,
            PlatformInformationSeeder::class,
            MechanicalItemSeeder::class,
        ]);

        /* User::factory()->create([
            'type_user_id' => 1,
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]); */

    }

}

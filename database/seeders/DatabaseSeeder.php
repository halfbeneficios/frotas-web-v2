<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            AdminSeeder::class,
        ]);

    }

}

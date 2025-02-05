<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('regions')->insert([
            [
                'id' => 1,
                'name' => 'Norte'
            ],
            [
                'id' => 2,
                'name' => 'Nordeste'
            ],
            [
                'id' => 3,
                'name' => 'Sudeste'
            ],
            [
                'id' => 4,
                'name' => 'Centro-Oeste'
            ],
            [
                'id' => 5,
                'name' => 'Sul'
            ]
        ]);

    }

}

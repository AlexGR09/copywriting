<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'México'],
            ['name' => 'Estados Unidos'],
            ['name' => 'Canadá'],
            ['name' => 'Japón'],
            ['name' => 'China'],
            ['name' => 'Brasil'],
        ]);
    }
}

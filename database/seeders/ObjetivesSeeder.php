<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objetives')->insert([
            [
                'name' => 'Conoce a tu especialista'
            ],
            [
                'name' => 'Orientacion e información'
            ],
            [
                'name' => 'Inspiracional'
            ],
            [
                'name' => 'Enfemérides'
            ],
            [
                'name' => 'Educativos'
            ],
            [
                'name' => 'Comercial o promocional'
            ],
            [
                'name' => 'Temas de interés que no son patologías'
            ],
            [
                'name' => 'Servicios médicos'
            ],[
                'name' => 'Casos Clínicos'
            ],
            [
                'name' => 'Órganos y extremidades'
            ],
            [
                'name' => 'Contenido de valor'
            ],
            [
                'name' => 'Ineractivos'
            ],
            [
                'name' => 'Contenido estacional'
            ],
            [
                'name' => 'Casos famosos de referencia'
            ]
        ]);
    }
}

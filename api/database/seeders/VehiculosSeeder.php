<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehiculos')->insert([
            
                'NSerie' => '123456789',
                'modelo' => 'Aveo',
                'color' => 'Rojo',
                'año' => '2021',
                'img' => 'https://www.chevrolet.com.mx/content/dam/chevrolet/na/mx/es/index/cars/2021-aveo/colorizer/01-images/2021-chevrolet-aveo-compact-car-01.jpg',
                'precio' => '200000',
                'kilometros' => '10000',
                'descripcion' => 'Auto en excelentes condiciones',
                'id_user' => 1,
                'id_marca' => 1,
                'id_categoria' => 1,
            
        ]);


    }
}

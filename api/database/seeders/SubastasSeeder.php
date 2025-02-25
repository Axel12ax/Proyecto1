<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubastasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('subasta')->insert([
            'precio_base'=>'12000','precio_minimo'=>'30000','fecha_inicio' => '2021-10-01', 'fecha_fin' => '2021-10-10','estado'=>'Activo', 'id_vehiculo' => 1,'id_user' => 1,
         
        ]);

      
    }
}

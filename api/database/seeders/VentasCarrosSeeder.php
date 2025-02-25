<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasCarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
       DB::table('ventas_Directa')->insert([
            
                'id_vehiculo' => 1,
                'id_user' => 1,
                'precio'=>'203215',
                'img'=>'www.google.com',
                
            
        ]);
    }
}

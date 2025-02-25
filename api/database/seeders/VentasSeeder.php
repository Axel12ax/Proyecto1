<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventas')->insert([
            
        
                'precio' => '30000',
                'id_user' => 1,
                'id_vehiculo' => 1,
           
        ]);

        
    }
}

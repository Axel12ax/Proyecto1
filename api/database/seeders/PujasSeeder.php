<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PujasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
    DB::table('pujas')->insert([
        'precio' => '10000',
        'id_user' => 1,
        'id_vehiculo' => 1,
    ]);

     
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ImgsSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
   
        DB::table('imgs')->insert([
            'id_vehiculo' => 1,
            'url' => 'https://www.google.com',
        ]);
        
    }
}

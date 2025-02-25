<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::TABLE('marcas')->insert([
        'name' => 'Toyota',
        'name' => 'Nissan',
        'name' => 'Chevrolet',
        'name' => 'Ford'
    ]);
      
    }
}

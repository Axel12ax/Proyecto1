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
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Nissan',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Chevrolet',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Ford',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Honda',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Volkswagen',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Hyundai',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Kia',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Mazda',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Mercedes Benz',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'BMW',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Audi',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Jeep',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Subaru',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Mitsubishi',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Suzuki',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Volvo',
    ]);
    DB::TABLE('marcas')->insert([
        'name' => 'Peugeot',
    ]);
      
    }
}

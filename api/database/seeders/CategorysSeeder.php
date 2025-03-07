<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('categorys')->insert([
            'name' => 'SUV',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Sedan',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Hatchback',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Pickup',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Coupe',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Convertible',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Minivan',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Van',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Truck',
        ]);

    }
}

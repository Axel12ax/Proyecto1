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
            'name'=> 'Sedan',
            'name'=> 'Hatchback',
            'name'=> 'Pickup',
            'name'=> 'Coupe',
        ]);

    }
}

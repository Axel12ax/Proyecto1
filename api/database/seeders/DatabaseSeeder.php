<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([

            UsersSeeder::class,
            MarcasSeeder::class,
            CategorysSeeder::class,
            VehiculosSeeder::class,
            ImgsSeeder::class,
            SubastasSeeder::class,
            PujasSeeder::class,
            VentasSeeder::class,
            VentasCarrosSeeder::class,
        ]);
    }
}

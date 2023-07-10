<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PosyanduSeeder::class,
            UserSeeder::class,
            aturanSeeder::class,
            adminSeeder::class,
            ortuSeeder::class,
            balitaSeeder::class,
        
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use App\Models\Tevekenyseg;
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
        //Kategoria::factory(2)->create();
        Tevekenyseg::factory(6)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\Kategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tevekenyseg>
 */
class TevekenysegFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayValues = ['kész','nincs kész'];
        return [
            'kat_id'=>Kategoria::all()->random()->id,
            'tev_nev'=>fake()->sentence(2),
            'allapot'=>$arrayValues[rand(0,1)]
        ];
    }
}

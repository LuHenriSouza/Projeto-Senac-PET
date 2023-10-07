<?php

namespace Database\Factories;

use App\Models\Especie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raca>
 */
class RacaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $min = Especie::min('id_especie');
        $max = Especie::max('id_especie');

        $min = $min ?? 1;
        $max = $max ?? 1;

        return [
            'raca' => fake()->sentence(1),
            'id_especie' => fake()->numberBetween($min,$max)
        ];
    }
}

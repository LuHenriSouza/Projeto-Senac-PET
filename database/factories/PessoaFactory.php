<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>fake()->name(),
            'email'=>fake()->email(),
            'telefone'=>fake()->phoneNumber(11),
            'endereco'=>fake()->address(),
            'cep'=>fake()->postcode(),
            'residencia_desc'=>fake()->paragraph(1),
            'cidade'=>fake()->city()
        ];
    }
}

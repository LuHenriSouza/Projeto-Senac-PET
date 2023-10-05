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
            'id_user'=> '1',
            'telefone'=>fake()->cellphoneNumber(),
            'endereco'=>fake()->streetAddress(),
            'numero'=>fake()->numberBetween(1,300),
            'cep'=>fake()->numberBetween(11111111,99999999),
            'cpf'=>fake()->cpf(false),
            'residencia_desc'=>fake()->paragraph(1),
            'cidade'=>fake()->city(),
            'estado'=>fake()->state(),
            'bairro'=>fake()->words(3, true)
        ];
    }
}

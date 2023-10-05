<?php

namespace Database\Factories;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PessoaInfo>
 */
class PessoaInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $min = Pessoa::min('id_pessoa');
        $max = Pessoa::max('id_pessoa');

        $min = $min ?? 1;
        $max = $max ?? 1;


        return [
            'id_pessoa'=>fake()->numberBetween($min,$max),
            'teve_animal'=>fake()->numberBetween(0,1),
            'animal_guarda'=>fake()->numberBetween(0,1),
            'qnt_pessoa_casa'=>fake()->numberBetween(1,6),
            'motivacao'=>fake()->paragraph(1),
            'observacoes'=>fake()->paragraph(1)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //'id_classe' => Classe::factory(),



        return [
            'classe_id' => rand(1,4),
            'name' => fake()->name(),
            'cpf' => fake()->numerify("###.###.###-##"),
            'email' => fake()->email(),
            'comment' => fake()->sentence(),
            'birthdate' => fake()->date()
        ];
    }
}

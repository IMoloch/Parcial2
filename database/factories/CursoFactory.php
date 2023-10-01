<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombreCurso' => $this->faker->word(),
            'año' => $this->faker->year($max = 'now'),
            'ciclo' => $this->faker->numberBetween($min = 1, $max = 2),
            'idprofesor' => $this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}

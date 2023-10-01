<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
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
            'nota1' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'nota2' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'nota3' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'nota4' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'promedio' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'parcial' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'idalumno' => $this->faker->numberBetween($min = 1, $max = 20),
            'idcurso' => $this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}

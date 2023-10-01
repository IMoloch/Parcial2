<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
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
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'dui' => $this->faker->randomNumber($nbDigits = 9, $strict = false),
            'telefono' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'email' => $this->faker->email(),
            'clave' => $this->faker->password()
        ];
    }
}

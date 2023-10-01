<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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
            'fecha_nacimiento' => $this->faker->date(),
            'direccion' => $this->faker->address(),
            'genero' => $this->faker->randomElement($array = array ('M','F')),
            'telefono' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'email' => $this->faker->email(),
            'clave' => $this->faker->password()
        ];
    }
}

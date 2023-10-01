<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Llamamos la libreria Facades\DB
use Illuminate\Support\Facades\DB;
// Referenciamos al modelo a utilizar
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de registro a partir eloquent
        $alumno = new Alumno();
        $alumno->nombre = 'Javier';
        $alumno->apellido = 'Rivera';
        $alumno->fecha_nacimiento = '1996-11-29';
        $alumno->direccion = 'Col. Santa Monica, Santa Tecla, La libertad';
        $alumno->genero = 'M';
        $alumno->telefono = 54981239;
        $alumno->email = 'javierrivera@gmail.com';
        $alumno->clave = 'abcd1234';
        $alumno->save();

        //Creacion de registro por medio de Facades DB
        DB::table('alumnos')->insert([
            'nombre' => 'David',
            'apellido' => 'Hernadez',
            'fecha_nacimiento' => '1990-02-15',
            'direccion' => 'Col. Espiral, San Marcos, San Salvador',
            'genero' => 'M',
            'telefono' => 97613489,
            'email' => 'davidhernandez@gmail.com',
            'clave' => '1234abcd',
        ]);

        //Creacion de 18 datos usando factories
        Alumno::factory(18)->create();
    }
}

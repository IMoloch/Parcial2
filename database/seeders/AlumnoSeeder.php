<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
    }
}

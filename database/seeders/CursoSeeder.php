<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Llamamos la libreria Facades\DB
use Illuminate\Support\Facades\DB;
// Referenciamos al modelo a utilizar
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de registro a partir eloquent
        $curso = new Curso();
        $curso->nombreCurso = 'Proyectos Web';
        $curso->año = 2023;
        $curso->ciclo = 2;
        $curso->idprofesor = 1;
        $curso->save();

        //Creacion de registro por medio de Facades DB
        DB::table('cursos')->insert([
            'nombreCurso' => 'Redes 1',
            'año' => 2023,
            'ciclo' => 1,
            'idprofesor' => 2,
        ]);

        //Creacion de 18 datos usando factories
        Curso::factory(18)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curso = new Curso();
        $curso->nombreCurso = 'Proyectos Web';
        $curso->año = 2023;
        $curso->ciclo = 2;
        $curso->idprofesor = 1;
        $curso->save();
    }
}

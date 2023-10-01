<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Llamamos la libreria Facades\DB
use Illuminate\Support\Facades\DB;
// Referenciamos al modelo a utilizar
use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de registro a partir eloquent
        $nota = new Nota();
        $nota->nota1 = 10;
        $nota->nota2 = 6.5;
        $nota->nota3 = 9.5;
        $nota->nota4 = 7;
        $nota->promedio = 8.25;
        $nota->parcial = 8;
        $nota->idalumno = 1;
        $nota->idcurso = 1;
        $nota->save();

        //Creacion de registro por medio de Facades DB
        DB::table('notas')->insert([
            'nota1' => 6,
            'nota2' => 8.5,
            'nota3' => 7.5,
            'nota4' => 7,
            'promedio' => 7.25,
            'parcial' => 9,
            'idalumno' => 2,
            'idcurso' => 2,
        ]);

        //Creacion de 18 datos usando factories
        Nota::factory(18)->create();
    }
}

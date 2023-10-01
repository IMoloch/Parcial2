<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
    }
}

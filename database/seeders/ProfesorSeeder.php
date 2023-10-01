<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $profesor = new Profesor();
        $profesor->nombre = 'Alexis';
        $profesor->apellido = 'Lopez';
        $profesor->dui = 129763489;
        $profesor->telefono = 49763159;
        $profesor->email = 'alexislopez@gmail.com';
        $profesor->clave = 'dcba4321';
        $profesor->save();
    }
}

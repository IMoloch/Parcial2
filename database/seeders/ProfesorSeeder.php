<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Llamamos la libreria Facades\DB
use Illuminate\Support\Facades\DB;
// Referenciamos al modelo a utilizar
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de registro a partir eloquent
        $profesor = new Profesor();
        $profesor->nombre = 'Alexis';
        $profesor->apellido = 'Lopez';
        $profesor->dui = 129763489;
        $profesor->telefono = 49763159;
        $profesor->email = 'alexislopez@gmail.com';
        $profesor->clave = 'dcba4321';
        $profesor->save();

        //Creacion de registro por medio de Facades DB
        DB::table('profesors')->insert([
            'nombre' => 'Jose',
            'apellido' =>'Jimenez',
            'dui' => 986431257,
            'telefono' => 52684156,
            'email' => 'josejimenez@gmail.com',
            'clave' => '4321dcba',
        ]);

        //Creacion de 18 datos usando factories
        Profesor::factory(18)->create();
    }
}

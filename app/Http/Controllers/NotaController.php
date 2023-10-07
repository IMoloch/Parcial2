<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamamiento al documento necesario para realizar Query Builder
use Illuminate\Support\Facades\DB;
//Importacion del modal Notas
use App\Models\Nota;


class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $notas = Nota::all();
        // return view ('tables.nota', [
        //     'notas' => DB::table('notas')->paginate(10)
        // ]);

        $notas = DB::table('notas as n')
                    ->select(DB::RAW('CONCAT(al.apellido, ", ",al.nombre) AS estudiante'),
                            'cu.nombrecurso as curso',
                            'año',
                            'ciclo',
                            'nota1',
                            'nota2',
                            'nota3',
                            'nota4',
                            'parcial',
                            'promedio',
                            DB::RAW('CONCAT(pf.apellido, ", ",pf.nombre) AS profesor'))
                    ->join('alumnos as al', 'n.idalumno', '=', 'al.id')
                    ->join('cursos as cu', 'n.idcurso', '=', 'cu.id')
                    ->join('profesors as pf', 'cu.idprofesor', '=', 'pf.id')
                    ->paginate(10);

        return view('tables.nota', [
            'notas'=>$notas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

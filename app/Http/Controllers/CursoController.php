<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamamiento al documento necesario para realizar Query Builder
use Illuminate\Support\Facades\DB;
//Importacion del modal Curso
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cursos = Curso::all();
        return view ('tables.curso', [
            'cursos' => DB::table('cursos')
                            ->select('cursos.*',
                                    DB::RAW('CONCAT(pf.apellido, ", ",pf.nombre) AS profesor'))
                            ->join('profesors as pf', 'cursos.idprofesor', '=', 'pf.id')
                            ->paginate(10)
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

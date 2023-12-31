<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamamiento al documento necesario para realizar Query Builder
use Illuminate\Support\Facades\DB;
//Importacion del modal Profesor
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profesors = Profesor::all();
        return view ('tables.profesor', [
            'profesors' => DB::table('profesors')->paginate(10)
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

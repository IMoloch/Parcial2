<?php

use Illuminate\Support\Facades\Route;
// Llamamos los controlladores necsarios
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\NotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Ruteo con verificacion de que exista una sesion
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Si se ha iniciado sesion se retorna la vista dashboard
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    // Ruteo de las vistas asignadas a los controladores
    Route::get('/tables/alumno', [AlumnoController::class,'index'])->name('alumnos.index');
    Route::get('/tables/profesor', [ProfesorController::class,'index'])->name('profesor.index');
    Route::get('/tables/curso', [CursoController::class,'index'])->name('cursos.index');
    Route::get('/tables/nota', [NotaController::class,'index'])->name('notas.index');
});


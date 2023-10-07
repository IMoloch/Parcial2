<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrecurso',
        'año',
        'ciclo',
        'idprofesor'
    ];

    //Asignacion de relaciones
    public function profesors(){
        return $this->belongsTo(Profesor::class, 'idprofesor');
    }

    public function notas(){
        return $this->hasMany(Nota::class, 'idcurso');
    }
}

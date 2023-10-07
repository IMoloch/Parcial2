<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'dui',
        'telefono',
        'email',
        'clave'
    ];

    public function cursos(){
        return $this->hasMany(Curso::class, 'idprofesor');
    }
}

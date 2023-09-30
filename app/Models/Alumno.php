<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'direccion', 'genero', 'telefono', 'correo', 'clave'];
}
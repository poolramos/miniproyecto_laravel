<?php

// app/Models/Curso.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nombre', 'codigo']; // Campos que pueden ser llenados

    // Relación con alumnos
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_curso', 'curso_id', 'alumno_id');
    }
}

<?php

// app/Models/Alumno.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email']; // Campos que pueden ser llenados

    // Relación con cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'alumno_curso', 'alumno_id', 'curso_id');
    }
}

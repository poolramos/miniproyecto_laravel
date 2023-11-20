<?php

// app/Models/Asistencia.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['alumno_id', 'fecha', 'asistencia']; // Campos que pueden ser llenados

    // Relación con alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}

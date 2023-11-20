<?php

// app/Models/Docente.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email']; // Campos que pueden ser llenados

    // Relaciones
    // Puedes agregar relaciones con otros modelos si es necesario
}

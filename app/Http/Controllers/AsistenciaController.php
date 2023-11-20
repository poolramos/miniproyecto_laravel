<?php

// app/Http/Controllers/AsistenciaController.php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function registrarAsistencia(Request $request, $alumno_id)
    {
        $alumno = Alumno::findOrFail($alumno_id);

        $asistencia = $request->input('asistencia');
        // Puedes validar la asistencia aquí (A, T, F)

        // Guardar la asistencia en la base de datos (puedes tener una tabla específica para la asistencia)
        // Por simplicidad, aquí solo se devuelve la asistencia registrada
        return response()->json(['message' => 'Asistencia registrada correctamente', 'asistencia' => $asistencia], 200);
    }
}


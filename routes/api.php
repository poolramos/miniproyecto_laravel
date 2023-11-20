<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php

Route::resource('docentes', 'DocenteController');
Route::resource('alumnos', 'AlumnoController');
Route::resource('cursos', 'CursoController');
Route::post('matricular-alumno/{alumno_id}/{curso_id}', 'CursoController@matricularAlumno');
Route::post('registrar-asistencia/{alumno_id}', 'AsistenciaController@registrarAsistencia');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Http\Controllers\EstudianteController; // <--- Correcto



Route::get("/", function () {
    $estudiante = new Estudiante();
    $estudiante->codigo = '124';
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanches';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->dni = '32534';
    $estudiante->save();

return view('welcome');
}); 

Route::get('/greeting', function () {
    return 'Hola compañeros';
})->name('saluditos');

Route::get('/bienvenido', function () {
    return view('bienvenidos');
})->name('salud');

Route::get('/prueba', function () {
    return 'Prueba';
})->name('prueba');

Route::get('/estudiante', function () {
    return view('estudiantes');
})->name('estudiantes');

// ¡Esta línea debe estar activa!
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes', [EstudiantesController::class, 'index']);
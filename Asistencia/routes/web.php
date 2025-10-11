<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Http\Controllers\EstudiantesController; // <--- Nombre correcto del controlador

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

// Esta ruta apunta a una vista simple (sin datos)
Route::get('/estudiante', function () {
    return view('estudiantes');
})->name('estudiantes');

// Esta es la ruta correcta que usa el controlador y muestra los datos
Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes.index');
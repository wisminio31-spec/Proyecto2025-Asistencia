<?php

namespace App\Http\Controllers\Estudiantes;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Estudiante; // ASUME que tienes un modelo llamado Estudiante

class EstudianteController extends Controller
{
    public function index()
    {
        $datos = Estudiante::all(); 

        return view('estudiantes.index', compact('datos')); 
    }
}

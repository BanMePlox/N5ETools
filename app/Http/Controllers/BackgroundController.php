<?php

namespace App\Http\Controllers;

use App\Models\Background;

class BackgroundController extends Controller
{
    public function index()
    {
        // Obtener todos los fondos de la base de datos
        $backgrounds = Background::all();

        // Pasar los fondos a la vista
        return view('backgrounds.index', compact('backgrounds'));
    }
}

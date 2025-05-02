<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions = Condition::all(); // Esto obtiene todas las condiciones de la base de datos
        return view('conditions.index', compact('conditions')); // Pasamos las condiciones a la vista
    }
}


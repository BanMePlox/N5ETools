<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\BackgroundController;

Route::get('/', function () {
    return view('index');
});

Route::get('/classes', fn() => view('classes'))->name('classes');
Route::get('/jutsu', fn() => view('jutsu'))->name('jutsu');
Route::get('/items', fn() => view('items'))->name('items');
Route::get('/clan', fn() => view('clan'))->name('clan');
Route::get('/feats', fn() => view('feats'))->name('feats');
Route::get('/backgrounds', [BackgroundController::class, 'index'])->name('backgrounds.index');


Route::get('/subclasses', fn() => view('subclasses'))->name('subclasses');

// Eliminar la ruta que devuelve la vista directamente
 //Route::get('/conditions', fn() => view('conditions'))->name('conditions');

// Usar la ruta que llama al controlador ConditionController
Route::get('conditions', [ConditionController::class, 'index'])->name('conditions.index');

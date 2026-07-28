<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurismoController;
use App\Http\Controllers\ContactoController;

Route::get('/', [TurismoController::class, 'index']);

Route::resource('turismo', TurismoController::class);

Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');

Route::get('/contacto', [ContactoController::class, 'index'])
    ->name('contacto.index');

Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');
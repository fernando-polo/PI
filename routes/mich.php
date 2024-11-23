<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorMich;

// Definición de rutas
Route::get('/mich/altaMedico', [controladorMich::class, 'altaMedico'])->name('rutaaltamedico');
Route::get('/mich/inicioAdmin', [controladorMich::class, 'inicioAdmin'])->name('rutainicioadmin');


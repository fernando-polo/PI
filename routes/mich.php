<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorMich;

// Definición de rutas
Route::get('/mich/altaMedico', [controladorMich::class, 'altaMedico'])->name('rutaaltamedico');
Route::get('/mich/inicioAdmin', [controladorMich::class, 'inicioAdmin'])->name('rutainicioadmin');
Route::get('/mich/adminMedicos', [controladorMich::class, 'adminMedicos'])->name('rutaadminMedicos');
Route::get('/mich/adminUsuarios', [controladorMich::class, 'adminUsuarios'])->name('rutaadminUsuarios');
Route::get('/mich/adminEstudios', [controladorMich::class, 'adminEstudios'])->name('rutaadminEstudios');

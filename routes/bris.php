<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEstudios;


Route::get('/estudios', [controladorEstudios::class, 'index'])->name('rutaEstudiosGuardados');
Route::get('/estudios/crear', [controladorEstudios::class, 'create'])->name('rutaFormularioEstudios');
Route::post('/estudios/guardar', [controladorEstudios::class, 'store'])->name('rutaGuardarEstudios');

//Route::get('/registroEstudio/create', [controladorEstudios::class, 'create'])->name('rutaEstudiosGuardados');
//Route::post('/registroEstudio', [controladorEstudios::class, 'store'])->name('rutaFormularioEstudios');
//Route::get('/estudiosGuardados', [controladorEstudios::class, 'index'])->name('rutaFormularioEstudios');


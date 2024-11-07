<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;




Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');

Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaRegistro');

Route::get('/iniciarSesion', [ControladorVistas::class, 'iniciarSesion'])->name('rutaIniciarSesion');


// Validación que el usuario ya esté ingresado
Route::get('/seleccionarEstudio', [ControladorVistas::class, 'seleccionarEstudio'])->name('rutaseleccionarEstudio');

Route::get('/estudioSeleccionado', [ControladorVistas::class, 'estudioSeleccionado'])->name('rutaestudioSeleccionado');





// Forms
Route::post('/registrarUsuario', [ControladorVistas::class, 'registrarUsuario'])->name('rutaRegistrarUsuario');
Route::post('/iniciarSesionFormulario', [ControladorVistas::class, 'iniciarSesionFormulario'])->name('rutainiciarSesionFormulario');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;



// Rutas "deafult"
Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/iniciarSesion', [ControladorVistas::class, 'iniciarSesion'])->name('rutaIniciarSesion');


// Rutas de los estudios
Route::get('/seleccionarEstudio', [ControladorVistas::class, 'seleccionarEstudio'])->name('rutaseleccionarEstudio');
Route::get('/estudioSeleccionadoD', [ControladorVistas::class, 'estudioSeleccionadoD'])->name('rutaestudioSeleccionadoD');
Route::get('/estudioSeleccionadoM', [ControladorVistas::class, 'estudioSeleccionadoM'])->name('rutaestudioSeleccionadoM');
Route::get('/estudioSeleccionadoP', [ControladorVistas::class, 'estudioSeleccionadoP'])->name('rutaestudioSeleccionadoP');
Route::get('/estudioSeleccionadoU', [ControladorVistas::class, 'estudioSeleccionadoU'])->name('rutaestudioSeleccionadoU');
Route::get('/estudioSeleccionadoE', [ControladorVistas::class, 'estudioSeleccionadoE'])->name('rutaestudioSeleccionadoE');


// Ruta del botón "Próximas Citas"
Route::get('/proximasCitas', [ControladorVistas::class, 'proximasCitas'])->name('rutaproximasCitas');

// Ruta del botón "Historial de Citas"
Route::get('/historialDeCitas', [ControladorVistas::class, 'historialDeCitas'])->name('rutahistorialDeCitas');


// Rutas de los Forms
Route::post('/registrarUsuario', [ControladorVistas::class, 'registrarUsuario'])->name('rutaRegistrarUsuario');
Route::post('/iniciarSesionFormulario', [ControladorVistas::class, 'iniciarSesionFormulario'])->name('rutainiciarSesionFormulario');

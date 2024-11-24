<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\usuariosController;

require base_path('routes/bris.php');

// Rutas "deafult"
Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/iniciarSesion', [ControladorVistas::class, 'iniciarSesion'])->name('rutaIniciarSesion');


// Rutas de los estudios
Route::get('/seleccionarEstudio', [ControladorVistas::class, 'seleccionarEstudio'])->name('rutaseleccionarEstudio');
Route::get('/estudioSeleccionadoT', [ControladorVistas::class, 'estudioSeleccionadoT'])->name('rutaestudioSeleccionadoT');
Route::get('/estudioSeleccionadoM', [ControladorVistas::class, 'estudioSeleccionadoM'])->name('rutaestudioSeleccionadoM');
Route::get('/estudioSeleccionadoP', [ControladorVistas::class, 'estudioSeleccionadoP'])->name('rutaestudioSeleccionadoP');
Route::get('/estudioSeleccionadoU', [ControladorVistas::class, 'estudioSeleccionadoU'])->name('rutaestudioSeleccionadoU');
Route::get('/estudioSeleccionadoC', [ControladorVistas::class, 'estudioSeleccionadoC'])->name('rutaestudioSeleccionadoC');


// Ruta del botón "Próximas Citas"
Route::get('/proximasCitas', [ControladorVistas::class, 'proximasCitas'])->name('rutaproximasCitas');

// Ruta del botón "Historial de Citas"
Route::get('/historialDeCitas', [ControladorVistas::class, 'historialDeCitas'])->name('rutahistorialDeCitas');


// Rutas de los Forms
Route::post('/iniciarSesionFormulario', [ControladorVistas::class, 'iniciarSesionFormulario'])->name('rutainiciarSesionFormulario');

// Rutas de usuariosController
Route::get('/registro/create', [usuariosController::class, 'create'])->name('rutaRegistro');
Route::post('/registro', [usuariosController::class, 'store'])->name('enviarUsuario');
Route::get('/usuariosGuardados', [usuariosController::class, 'index'])->name('rutausuariosGuardados');

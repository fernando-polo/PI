<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\controladorMich;

require base_path('routes/bris.php');

// Rutas "deafult"
Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/iniciarSesion', [ControladorVistas::class, 'iniciarSesion'])->name('rutaIniciarSesion');

// Rutas botones para las vistas de Administrativas y Médico
    // Administrativas
    Route::get('/iniciarSesionAdmin', [ControladorVistas::class, 'iniciarSesionAdmin'])->name('rutainiciarSesionAdmin');
    Route::get('/vistasAdmin', [usuariosController::class, 'index'])->name('rutavistasAdmin');

    // Médicos
    Route::get('/iniciarSesionMedicos', [ControladorVistas::class, 'iniciarSesionMedicos'])->name('rutainiciarSesionMedicos');
    Route::get('/vistasMedicos', [ControladorVistas::class, 'vistasMedicos'])->name('rutavistasMedicos');
    Route::get('/vistasMedicosCR', [ControladorVistas::class, 'vistasMedicosCR'])->name('rutavistasMedicosCR');
    Route::get('/vistasMedicosPC', [ControladorVistas::class, 'vistasMedicosPC'])->name('rutavistasMedicosPC');





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
<<<<<<< HEAD
    // Rutas para registrar un usuario
    Route::get('/registro/create', [usuariosController::class, 'create'])->name('rutaRegistro');
    Route::post('/registro', [usuariosController::class, 'store'])->name('enviarUsuario');

    // Rutas para editar un usuario
    Route::get('/usuarios/update/{id}', [usuariosController::class, 'edit'])->name('rutausuariosUpdate');
    Route::put('/usuarios/{id}/update', [usuariosController::class, 'update'])->name('rutaactualizarUsuario');

    // Ruta para eliminar un usuario
    Route::delete('/usuarios/delete/{id}', [usuariosController::class, 'destroy'])->name('rutaeliminarUsuario');
=======
Route::get('/registro/create', [usuariosController::class, 'create'])->name('rutaRegistro');    
Route::post('/registro', [usuariosController::class, 'store'])->name('enviarUsuario');
Route::get('/usuariosGuardados', [usuariosController::class, 'index'])->name('rutausuariosGuardados');

<<<<<<< HEAD
Route::get('/altaMedico', [controladorMich::class, 'altaMedico'])->name('rutaaltamedico');
>>>>>>> 2c99c7f (Cambios mich)
=======
require base_path('routes/mich.php');
>>>>>>> f0905d2 (Rutas y adminMedicos)

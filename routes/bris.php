<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEstudios;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Password;

// Rutas para restablecimiento de contraseña
Route::get('/restablecer-contrasena', function () {
    return view('briss.restablecerContra'); // Vista existente para olvidó contraseña
})->name('password.request');

Route::get('/cambiar-contrasena', function () {
    return view('briss.cambiarContra'); // Nueva vista de restablecimiento
})->name('password.reset');

// Rutas principales existentes
=======
=======
use Illuminate\Support\Facades\Password;
>>>>>>> 59d8fa9 (vistas medicos)

// Rutas para restablecimiento de contraseña
Route::get('/restablecer-contrasena', function () {
    return view('briss.restablecerContra'); // Vista existente para olvidó contraseña
})->name('password.request');

<<<<<<< HEAD
>>>>>>> 0fbc6ca (ignorar)
=======
Route::get('/cambiar-contrasena', function () {
    return view('briss.cambiarContra'); // Nueva vista de restablecimiento
})->name('password.reset');

// Rutas principales existentes
>>>>>>> 59d8fa9 (vistas medicos)
Route::get('/estudios', [controladorEstudios::class, 'index'])->name('rutaEstudiosGuardados');
Route::get('/estudios/crear', [controladorEstudios::class, 'create'])->name('rutaFormularioEstudios');
Route::post('/estudios/guardar', [controladorEstudios::class, 'store'])->name('rutaGuardarEstudios');

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59d8fa9 (vistas medicos)
// Ruta para el login médico (con subcarpeta briss)
Route::get('/medico/login', function() {
    return view('briss.loginMedico'); // Vista en subcarpeta briss
})->name('login');
<<<<<<< HEAD

// Ruta para vista principal medico
Route::get('/medico/principal', function() {
    return view('briss.principalMedico'); // Vista en subcarpeta briss
})->name('principal');

// Ruta para vista historial citas
Route::get('/historial-citas', function() {
    return view('briss.historialCitas'); // Vista en subcarpeta briss
})->name('historial');

// Ruta para vista citas medico
Route::get('/medico/citas', function() {
    return view('briss.citasMedico'); // Vista en subcarpeta briss
})->name('citas');

// Ruta para vista disponibilidad medico
Route::get('/medico/disponibilidad', function() {
    return view('briss.disponibilidadMedico'); // Vista en subcarpeta briss
})->name('disponibilidad');
=======
//Route::get('/registroEstudio/create', [controladorEstudios::class, 'create'])->name('rutaEstudiosGuardados');
//Route::post('/registroEstudio', [controladorEstudios::class, 'store'])->name('rutaFormularioEstudios');
//Route::get('/estudiosGuardados', [controladorEstudios::class, 'index'])->name('rutaFormularioEstudios');

>>>>>>> 0fbc6ca (ignorar)
=======

// Ruta para vista principal medico
Route::get('/medico/principal', function() {
    return view('briss.principalMedico'); // Vista en subcarpeta briss
})->name('principal');

// Ruta para vista historial citas
Route::get('/historial-citas', function() {
    return view('briss.historialCitas'); // Vista en subcarpeta briss
})->name('historial');

// Ruta para vista citas medico
Route::get('/medico/citas', function() {
    return view('briss.citasMedico'); // Vista en subcarpeta briss
})->name('citas');

// Ruta para vista disponibilidad medico
Route::get('/medico/disponibilidad', function() {
    return view('briss.disponibilidadMedico'); // Vista en subcarpeta briss
})->name('disponibilidad');
>>>>>>> 59d8fa9 (vistas medicos)

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorMich;

Route::get('/mich/altaMedico', [controladorMich::class, 'mich.altaMedico'])->name('rutaAltaMedico');
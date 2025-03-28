<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paul;


Route::get('/ayudaEmocional', [paul::class, 'ayudaEmocional'])->name('RutaAyudaEmocional');

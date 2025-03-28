<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paul extends Controller
{
    public function ayudaEmocional()
    {
        return view('ayudaEmocional'); // Esto cargará resources/views/ayuda-emocional.blade.php
    }
}

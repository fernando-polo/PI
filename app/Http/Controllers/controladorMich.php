<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorMich extends Controller
{
    public function altaMedico()
    {
        return view('mich.altaMedico'); 
    }
}

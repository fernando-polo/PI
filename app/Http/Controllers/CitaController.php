<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionCita;

class CitaController extends Controller
{
    public function enviarCorreoCita()
    {
        $datosCita = [
            'nombre' => 'Profe Isay',
            'fecha' => '11 de marzo',
            'hora' => '10:00 AM'
        ];

        Mail::to('mx.acosta@proton.me')->send(new NotificacionCita($datosCita));

        return response()->json(['message' => 'Correo enviado con exito'], 200);
    }
}

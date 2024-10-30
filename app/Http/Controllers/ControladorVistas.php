<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorRegistroUsuarios;
use App\Http\Requests\validadorIniciarSesion;

use Illuminate\Http\Request;


class ControladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function registro(){
        return view('registro');
    }

    public function iniciarSesion(){
        return view('iniciarSesion');
    }

    


    public function registrarUsuario(validadorRegistroUsuarios $peticionValidada){

        // Redireción con valores en session
        $usuario = $peticionValidada->input('txtNombre');
    
        session()->flash('exito', $usuario);
    
        return to_route('rutaRegistro');
       }


    public function iniciarSesionFormulario(validadorIniciarSesion $peticionValidada){

        // Redireción con valores en session
        $correo = $peticionValidada->input('txtCorreo');
    
        session()->flash('exito', $correo);
    
        return to_route('rutaIniciarSesion');
       }
    


}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorRegistroUsuarios;
use App\Http\Requests\validadorIniciarSesion;

use Illuminate\Http\Request;


class ControladorVistas extends Controller
{

    // Rutas "deafult"
        public function home(){
            return view('inicio');
        }

        public function iniciarSesion(){
            return view('iniciarSesion');
        }

    
    // Rutas de los estudios
        public function seleccionarEstudio(){
            return view('seleccionarEstudio');
        }

        public function estudioSeleccionadoT(){
            return view('estudioSeleccionadoT');
        }

        public function estudioSeleccionadoM(){
            return view('estudioSeleccionadoM');
        }

        public function estudioSeleccionadoP(){
            return view('estudioSeleccionadoP');
        }

        public function estudioSeleccionadoU(){
            return view('estudioSeleccionadoU');
        }

        public function estudioSeleccionadoC(){
            return view('estudioSeleccionadoC');
        }

        public function proximasCitas(){
            return view('proximasCitas');
        }

        public function historialDeCitas(){
            return view('historialDeCitas');
        }


        public function iniciarSesionFormulario(validadorIniciarSesion $peticionValidada){

            // Redireción con valores en session
            $correo = $peticionValidada->input('txtCorreo');
        
            session()->flash('datosValidados', $correo);
        
            return to_route('rutaIniciarSesion');
        }
    


}

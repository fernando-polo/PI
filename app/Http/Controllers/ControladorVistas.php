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

        public function registro(){
            return view('registro');
        }

        public function iniciarSesion(){
            return view('iniciarSesion');
        }

    
    // Rutas de los estudios
        public function seleccionarEstudio(){
            return view('seleccionarEstudio');
        }

        public function estudioSeleccionadoD(){
            return view('estudioSeleccionadoD');
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

        public function estudioSeleccionadoE(){
            return view('estudioSeleccionadoE');
        }

        public function proximasCitas(){
            return view('proximasCitas');
        }

        public function historialDeCitas(){
            return view('historialDeCitas');
        }



    // Rutas de los forms
        public function registrarUsuario(validadorRegistroUsuarios $peticionValidada){

            // Redireción con valores en session
            $usuario = $peticionValidada->input('txtNombre');
        
            session()->flash('usuarioGuardado', $usuario);
        
            return to_route('rutaRegistro');
        }


        public function iniciarSesionFormulario(validadorIniciarSesion $peticionValidada){

            // Redireción con valores en session
            $correo = $peticionValidada->input('txtCorreo');
        
            session()->flash('datosValidados', $correo);
        
            return to_route('rutaIniciarSesion');
        }
    


}

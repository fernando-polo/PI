<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorEstudios;

class controladorEstudios extends Controller
{
    /**
     * Mostrar la lista de estudios guardados.
     */
    public function index()
    {
        $ConsultarEstudios = DB::table('estudios')->get();
        return view('formEstudios.estudiosGuardados', compact('ConsultarEstudios'));
    }

    /**
     * Mostrar el formulario de registro de estudios.
     */
    public function create()
    {
        return view('formEstudios.formularioEstudios');
    }

    /**
     * Guardar un nuevo registro de estudio.
     */
    public function store(validadorEstudios $request)
    {
        DB::table('estudios')->insert([
            'nombre' => $request->input('txtNombre'),
            'especialidad' => $request->input('txtEspecialidad'),
            'requisitos' => $request->input('txtRequisitos'),
            'precio' => $request->input('txtPrecio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $estudio = $request->input('txtNombre');

        session()->flash('estudioGuardado', $estudio);

        return redirect()->route('rutaFormularioEstudios');
    }
}

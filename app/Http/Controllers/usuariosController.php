<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorRegistroUsuarios;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarUsuarios = DB::table('usuarios')->get();
        return view ('usuariosGuardados', compact('ConsultarUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorRegistroUsuarios $request)
    {
        DB::table('usuarios')->insert([
            'curp'=>$request->input('txtCURP'),
            'nombre'=>$request->input('txtNombre'),
            'a_paterno'=>$request->input('txtAPaterno'),
            'a_materno'=>$request->input('txtAMaterno'),
            'email'=>$request->input('txtCorreo'),
            'password'=>$request->input('txtContraseña'),
            'telefono'=>$request->input('txtTelefono'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        $usuario = $request->input('txtNombre');
        
        session()->flash('usuarioGuardado', $usuario);
    
        return to_route('rutaRegistro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

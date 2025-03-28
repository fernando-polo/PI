<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorRegistroUsuarios;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoConfirmacion;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarUsuarios = DB::table('usuarios')->get();
        return view ('vistasAdmin', compact('ConsultarUsuarios'));
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

        $usuario = [
            'curp' => $request->txtCURP,
            'nombre' => $request->txtNombre,
            'a_paterno' => $request->txtAPaterno,
            'a_materno' => $request->txtAMaterno,
            'email' => $request->txtCorreo,
            'telefono' => $request->txtTelefono,
            'password' => $request->txtContraseña
        ];

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


        Mail::to($usuario['email'])->send(new CorreoConfirmacion($usuario));
        
        session()->flash('usuarioGuardado', $usuario['nombre']); 

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
        $usuario = DB::table('usuarios')
        ->where('id', $id)
        ->first();
        return view ('usuariosUpdate', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorRegistroUsuarios $request, string $id)
    {
        DB::table('usuarios')
        ->where('id', $id)
        ->update([
            'curp' => $request->txtCURP,
            'nombre' => $request->txtNombre,
            'a_paterno' => $request->txtAPaterno,
            'a_materno' => $request->txtAMaterno,
            'email' => $request->txtCorreo,
            'password' => $request->txtContraseña,
            'telefono' => $request->txtTelefono,
            'updated_at' => Carbon::now(),
        ]);

        $usuario = $request->txtNombre;

        session()->flash('usuarioActualizado', $usuario);

        return to_route('rutavistasAdmin');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('usuarios')->where('id', $id)->delete();

        session()->flash('usuarioEliminado');

        return to_route('rutavistasAdmin');
    }
}

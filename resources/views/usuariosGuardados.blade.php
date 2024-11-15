@extends('layouts.app')

@section('titulo', 'Usuarios guardados')

@section('contenido')

  <br>
  <h1 class="text-center">Vista administrativa (Prototipo)</h1>
  <hr class="hr-custom">

  @foreach ($ConsultarUsuarios as $usuario)

    <div class="container mt-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">CURP: {{$usuario -> curp}}</h5>
          <p class="card-text"><strong>Nombre del usuario:</strong> {{$usuario -> nombre}}</p>
          <p class="card-text"><strong>Apellido Paterno del usuario: </strong>{{$usuario -> a_paterno}}</p>
          <p class="card-text"><strong>Apellido Materno del usuario: </strong>{{$usuario -> a_materno}}</p>
          <p class="card-text"><strong>Email del usuario: </strong>{{$usuario -> email}}</p>
          <p class="card-text"><strong>Contraseña del usuario: </strong>{{$usuario -> password}}</p>
          <p class="card-text"><strong>Teléfono del usuario: </strong>{{$usuario -> telefono}}</p>
        </div>
      </div>
    </div>

  @endforeach

@endsection
    

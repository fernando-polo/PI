@extends('layouts.app')

@section('titulo', 'Estudios Guardados')

@section('contenido')

<br>
<h1 class="text-center">Vista Administrativa de Estudios (Prototipo)</h1>
<hr class="hr-custom">

@foreach ($ConsultarEstudios as $estudio)

<div class="container mt-4 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Nombre: {{ $estudio->nombre }}</h5>
      <p class="card-text"><strong>Especialidad:</strong> {{ $estudio->especialidad }}</p>
      <p class="card-text"><strong>Requisitos:</strong> {{ $estudio->requisitos }}</p>
      <p class="card-text"><strong>Precio:</strong> ${{ number_format($estudio->precio, 2) }}</p>
    </div>
  </div>
</div>

@endforeach

@endsection

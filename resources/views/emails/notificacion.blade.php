@extends('layouts.app')

@section('titulo', 'Confirmación cita')

@section('contenido')

    <head>
        <meta charset="UTF-8">
        <title>Confirmación de Cita</title>
    </head>
    <body>
        <h1>Hola, {{ $datos['nombre'] }}</h1>
        <p>Tu cita médica está programada para el {{ $datos['fecha'] }} a las {{ $datos['hora'] }}.</p>
        <p>Gracias por confiar en nuestra clínica.</p>
    </body>

@endsection
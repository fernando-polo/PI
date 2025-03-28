@extends('layouts.templateVAdmin')

@section('titulo', 'Vistas administrativas')

@section('btn1')
    <a href="{{route('rutaadminMedicos')}}" id="btnIconoCalendario" class="btn btn-outline-primary">
        <i class="bi bi-calendar"></i>        
        Médicos
    </a>
@endsection

@section('btn2')
    <a href="{{route('rutaadminUsuarios')}}" id="btnIconoCitasProximas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-plus"></i>
        Usuarios 
    </a>
@endsection

@section('btn3')
    <a href="{{route('rutaadminEstudios')}}" id="btnIconoCitasRealizadas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-check"></i>        
        Estudios
    </a>
@endsection


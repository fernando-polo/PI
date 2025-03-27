@extends('layouts.templateVAdmin')

@section('titulo', 'Vistas administrativas')

@section('btn1')
    <a href="{{route('rutavistasMedicos')}}" id="btnIconoCalendario" class="btn btn-outline-primary">
        <i class="bi bi-calendar"></i>        
        Calendario
    </a>
@endsection

@section('btn2')
    <a href="{{route('rutavistasMedicosPC')}}" id="btnIconoCitasProximas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-plus"></i>
        Próximas citas
    </a>
@endsection

@section('btn3')
    <a href="{{route('rutavistasMedicosCR')}}" id="btnIconoCitasRealizadas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-check"></i>        
        Citas realizadas
    </a>
@endsection


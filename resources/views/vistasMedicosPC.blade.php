@extends('layouts.templateVAdmin')

@section('titulo', 'Vistas Médicos')

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
    <a href="{{route('rutavistasMedicosCR')}}"  id="btnIconoCitasRealizadas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-check"></i>        
        Citas realizadas
    </a>
@endsection

@section('contenidoRegistros')

    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
            <h1 class="display-1">Próximas citas</h1>
                
            {{-- Ejemplos --}}
                <x-template-card-citas-pendientes>
                    <x-slot name="boton">
                        <a href="" class="btn btn-sm btn-outline-primary mt-4 mb-4">Cancelar cita</a>
                    </x-slot>    
                </x-template-card-citas-pendientes>

                <x-template-card-citas-pendientes>
                    <x-slot name="boton">
                        <a href="" class="btn btn-sm btn-outline-primary mt-4 mb-4">Cancelar cita</a>
                    </x-slot>    
                </x-template-card-citas-pendientes>

                <x-template-card-citas-pendientes>
                    <x-slot name="boton">
                        <a href="" class="btn btn-sm btn-outline-primary mt-4 mb-4">Cancelar cita</a>
                    </x-slot>    
                </x-template-card-citas-pendientes>
            </div>
            
        </div>
    </div>




@endsection  
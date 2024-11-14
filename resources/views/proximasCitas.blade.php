@extends('layouts.app')

@section('titulo', 'Próximas citas')

@section('contenido')

<x-template-usuario-sesion>

    <x-slot name="titulo2">
        Citas pendientes: - (EJEMPLO)
    </x-slot>

    <x-slot name="contenido">

        <x-template-card-citas-pendientes>

            <x-slot name="boton">
                <a href="" class="btn btn-sm btn-outline-primary mt-4 mb-4">Cancelar cita</a>
            </x-slot>

        </x-template-card-citas-pendientes>


    </x-slot>

</x-template-usuario-sesion>

@endsection
    

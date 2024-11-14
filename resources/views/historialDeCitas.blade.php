@extends('layouts.app')

@section('titulo', 'Citas realizadas')

@section('contenido')

<x-template-usuario-sesion>

    <x-slot name="titulo2">
        Citas realizadas: - (EJEMPLO)
    </x-slot>

    <x-slot name="contenido">

        <x-template-card-citas-pendientes>

        </x-template-card-citas-pendientes>


    </x-slot>

</x-template-usuario-sesion>

@endsection
    

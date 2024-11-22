@extends('layouts.app')

@section('titulo', 'Seleccionar estudio')

@section('contenido')

<x-template-usuario-sesion>

    <x-slot name="titulo1">
        Estudio seleccionado: 
    </x-slot>

    <x-slot name="titulo2">
        Colonoscopia
    </x-slot>

    <x-slot name="contenido">
        <div class="row gap-4 justify-content-center mb-5 mt-5 text-center">
            <div class="card card_estudioSeleccionado  align-items-center justify-content-center">
                  <div class="row">
                      <img src="{{ asset('images/estudio.png') }}" class="card-img-top" alt="Card Mastografia">
                  </div>
                  <div class="row mt-5">
                      <h5>Colonoscopia</h5>
                      <h6 class="mt-2"><span style="color: #ff5733">$5,500.00</span></h6>
                  </div>
                  <div class="row  mt-3">
                      <a href="#" class="btn btn-sm btn-outline-secondary">Seleccionar</a>
                  </div>
             </div>
             <div class="card card_estudioSeleccionado  align-items-center justify-content-center">
                <div class="row">
                    <img src="{{ asset('images/estudio.png') }}" class="card-img-top" alt="Card Mastografia">
                </div>
                <div class="row mt-5">
                    <h5>Colonoscopia virtual</h5>
                    <h6 class="mt-2"><span style="color: #ff5733">$4,700.00</span></h6>
                </div>
                <div class="row  mt-3">
                    <a href="#" class="btn btn-sm btn-outline-secondary">Seleccionar</a>
                </div>
           </div>
          </div> 
    </x-slot>

</x-template-usuario-sesion>


@endsection
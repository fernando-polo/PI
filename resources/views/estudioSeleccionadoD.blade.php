@extends('layouts.app')

@section('titulo', 'Estudio Seleccionado')

@section('contenido')

<x-template-usuario-sesion>

    <x-slot name="titulo1">
        Estudio seleccionado: 
    </x-slot>

    <x-slot name="titulo2">
        Densitometría
    </x-slot>

    <x-slot name="contenido">
        <div class="row gap-4 justify-content-center mb-5 mt-5 text-center">
            <div class="card card_estudioSeleccionado  align-items-center justify-content-center">
                  <div class="row">
                      <img src="{{ asset('images/lupa.png') }}" class="card-img-top" alt="Card Mastografia">
                  </div>
                  <div class="row mt-5">
                      <h5>Densitometría ósea de columna y fémur</h5>
                      <h6 class="mt-2"><span style="color: #484FFA">$75.00</span></h6>
                  </div>
                  <div class="row  mt-3">
                      <a href="#" class="btn btn-sm btn-outline-secondary">Seleccionar</a>
                  </div>
             </div>
          
              <div class="card card_estudioSeleccionado align-items-center justify-content-center">
                  <div class="row">
                      <img src="{{ asset('images/lupa.png') }}" class="card-img-top" alt="Card Densitometria">
                  </div>
                  <div class="row mt-5">
                      <h5>Densitometría ósea de cuerpo completo</h5>
                      <h6 class="mt-2"><span style="color: #484FFA">$250.00</span></h6>
                  </div>
                  <div class="row  mt-3">
                      <a href="#" class="btn btn-sm btn-outline-secondary">Seleccionar</a>
                  </div>
              </div>
          
              <div class="card card_estudioSeleccionado align-items-center justify-content-center">
                  <div class="row">
                      <img src="{{ asset('images/lupa.png') }}" class="imagen_card card-img-top" alt="Card Papanicolau">
                  </div>
                  <div class="row mt-5">
                      <h5>Densitometría pediátrica de columna y cuerpo completo</h5>
                      <h6 class="mt-2"><span style="color: #484FFA">$250.00</span></h6>
                  </div>
                  <div class="row mt-3">
                      <a href="#" class="btn btn-sm btn-outline-secondary">Seleccionar</a>
                  </div>
              </div>
          </div> 
    </x-slot>

</x-template-usuario-sesion>

@endsection
    

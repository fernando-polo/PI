@extends('layouts.app')

@section('titulo', 'Seleccionar estudio')

@section('contenido')

    <x-template-usuario-sesion>

        <x-slot name="titulo2">
            Selecciona el estudio que desees
        </x-slot>

        <x-slot name="contenido">
            <div class="row gap-4 justify-content-center mb-5 mt-5">
                <div class="card align-items-center justify-content-center">
                      <div class="row">
                          <img src="{{ asset('images/NE_Mastografia.jpg') }}" class="card-img-top" alt="Card Mastografia" id="Card_Img_NE_Mastografia">
                      </div>
                      <br>
                      <div class="row">
                          <a href="{{route('rutaestudioSeleccionadoM')}}" class="btn btn-sm btn-outline-secondary">Mastografía</a>
                      </div>
                 </div>
              
                  <div class="card align-items-center justify-content-center">
                      <div class="row">
                          <img src="{{ asset('images/NE_Tomografia.jpg') }}" class="card-img-top" alt="Card Densitometria" id="Card_Img_NE_Densitometria">
                      </div>
                      <br>
                      <div class="row">
                          <a href="{{route('rutaestudioSeleccionadoT')}}" class="btn btn-sm btn-outline-secondary">Tomografías</a>
                      </div>
                  </div>
              
                  <div class="card align-items-center justify-content-center">
                      <div class="row">
                          <img src="{{ asset('images/NE_Papanicolau.jpg') }}" class="imagen_card card-img-top" alt="Card Papanicolau" id="Card_Img_NE_Papanicolau">
                      </div>
                      <br>
                      <div class="row">
                          <a href="{{route('rutaestudioSeleccionadoP')}}" class="btn btn-sm btn-outline-secondary">Papanicolau</a>
                      </div>
                  </div>
              
                  <div class="card align-items-center justify-content-center">
                      <div class="row">
                          <img src="{{ asset('images/NE_Ultrasonido.jpg') }}" class="card-img-top" alt="Card Ultrasonido" id="Card_Img_NE_Ultrasonido">
                      </div>
                      <br>
                      <div class="row">
                          <a href="{{route('rutaestudioSeleccionadoU')}}" class="btn btn-sm btn-outline-secondary">Ultrasonido</a>
                      </div>
                  </div>
              
                  <div class="card align-items-center justify-content-center">
                      <div class="row">
                          <img src="{{ asset('images/NE_Colonoscopia.jpg') }}" class="card-img-top" alt="Card VPH" id="Card_Img_NE_VPH">
                      </div>
                      <br>
                      <div class="row">
                          <a href="{{route('rutaestudioSeleccionadoC')}}" class="btn btn-sm btn-outline-secondary">Colonoscopia</a>
                      </div>
                  </div>
              </div>  
        </x-slot>

    </x-template-usuario-sesion>

@endsection
    

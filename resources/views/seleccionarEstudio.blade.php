@extends('layouts.app')

@section('titulo', 'Seleccionar estudio')

@section('contenido')
<section style="min-height: 80vh;">
    <div class="container">
        <br>
        <br>
        <div class="row mt-2" style="background-color:">
            <div class="container">
                <a href="#" class="btn btn-primary btn_personalizado me-3">Agendar cita</a>
                <a href="" class="btn btn-primary btn_personalizado me-3">Próximas citas</a>
                <a href="" class="btn btn-primary btn_personalizado">Historial de citas</a>
             </div>
        </div>
    </div>
    <div class="container container_personalizado mb-5"> 
        <div class="row mt-2">
            <div class="container ">
                <br>
                <h1><span style="color: #484FFA">Selecciona el estudio que desees</span></h1>
                <div class="row gap-4 justify-content-center mb-5 mt-5">
                  <div class="card align-items-center justify-content-center">
                        <div class="row">
                            <img src="{{ asset('images/NE_Mastografia.jpg') }}" class="card-img-top" alt="Card Mastografia" id="Card_Img_NE_Mastografia">
                        </div>
                        <br>
                        <div class="row">
                            <a href="#" class="btn btn-sm btn-outline-secondary">Mastografía</a>
                        </div>
                   </div>
                
                    <div class="card align-items-center justify-content-center">
                        <div class="row">
                            <img src="{{ asset('images/NE_Densitometria.jpg') }}" class="card-img-top" alt="Card Densitometria" id="Card_Img_NE_Densitometria">
                        </div>
                        <br>
                        <div class="row">
                            <a href="{{route('rutaestudioSeleccionado')}}" class="btn btn-sm btn-outline-secondary">Densitometría</a>
                        </div>
                    </div>
                
                    <div class="card align-items-center justify-content-center">
                        <div class="row">
                            <img src="{{ asset('images/NE_Papanicolau.jpg') }}" class="imagen_card card-img-top" alt="Card Papanicolau" id="Card_Img_NE_Papanicolau">
                        </div>
                        <br>
                        <div class="row">
                            <a href="#" class="btn btn-sm btn-outline-secondary">Papanicolau</a>
                        </div>
                    </div>
                
                    <div class="card align-items-center justify-content-center">
                        <div class="row">
                            <img src="{{ asset('images/NE_Ultrasonido.jpg') }}" class="card-img-top" alt="Card Ultrasonido" id="Card_Img_NE_Ultrasonido">
                        </div>
                        <br>
                        <div class="row">
                            <a href="#" class="btn btn-sm btn-outline-secondary">Ultrasonido</a>
                        </div>
                    </div>
                
                    <div class="card align-items-center justify-content-center">
                        <div class="row">
                            <img src="{{ asset('images/NE_VPH.jpg') }}" class="card-img-top" alt="Card VPH" id="Card_Img_NE_VPH">
                        </div>
                        <br>
                        <div class="row">
                            <a href="#" class="btn btn-sm btn-outline-secondary">VPH</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

@endsection
    

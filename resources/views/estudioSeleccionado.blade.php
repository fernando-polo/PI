@extends('layouts.app')

@section('titulo', 'Estudio Seleccionado')

@section('contenido')


<section style="min-height: 80vh;">
    <div class="container">
        <br>
        <br>
        <div class="row mt-2" style="background-color:">
            <div class="container">
                <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-primary btn_personalizado me-3">Agendar cita</a>
                <a href="" class="btn btn-primary btn_personalizado me-3">Próximas citas</a>
                <a href="" class="btn btn-primary btn_personalizado">Historial de citas</a>
             </div>
        </div>
    </div>
    <div class="container container_personalizado mb-5"> 
        <div class="row mt-2">
            <div class="container ">
                <br>
                <h1>Estudio seleccionado: <span style="color: #484FFA">Densitometria</span></h1>
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
                {{-- <div class="container">
                    <div class="row mb-5 text-end">
                        <div class="col">
                            <a href="#" class="btn btn-sm btn-outline-secondary">Continuar</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
    

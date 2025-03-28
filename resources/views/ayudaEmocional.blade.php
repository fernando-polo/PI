@extends('layouts.app') 

@section('contenido')
<div class="container">
    <h1 class="mt-5">Ayuda Emocional</h1>
    <p>Contenido de la página de ayuda emocional...</p>
<br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-start">
                    <h1 class="titulo"><strong>Sabemos que el camino es dificil, <span style="color: #711BA4">no tienes por que estar solo.</span></strong></h1>
                    <p style="font-size: 20px">Conectate con algunos de nuestros expertos en salud mental <span style="color: #8F7ada;">o</span> contacta con una linea de ayuda. 
                        <span style="color: #8F7ada">nosotros te ayudamos.</span></p>        
                        <br>
                    <div class="text-start">
                        <form>
                            <a href="#NuestrosEstudios" class="btn btn-sm btn-outline-primary">Conocer más</a>
                            <a href="{{route('rutaRegistro')}}" class="btn btn-sm btn-outline-secondary">Agendar Cita</a>
                        </form>
                    </div>
                </div>
                <br>
                <div class="col-lg-6 text-start">
                    <img src="{{ asset('images/HeroImg.jpg') }}" alt="Logo - Clínica Médica" class="img-fluid" style="max-width: 100%; height: auto; max-height: 400px;">
                </div>

            </div>
        </div> 
    <br>
</div>
@endsection
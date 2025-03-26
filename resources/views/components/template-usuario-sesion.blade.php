<section style="min-height: 80vh;">
    <div class="container">
        <br>
        <br>
        <div class="row mt-2" style="background-color:">
            <div class="container">
                <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-primary btn_personalizado me-3">Agendar cita</a>
                <a href="{{route('rutaproximasCitas')}}" class="btn btn-primary btn_personalizado me-3">Próximas citas</a>
                <a href="{{route('rutahistorialDeCitas')}}" class="btn btn-primary btn_personalizado">Historial de citas</a>
             </div>
        </div>
    </div>
    <div class="container container_personalizado mb-5"> 
        <div class="row mt-2">
            <div class="container ">
                <br>
                <h1>{{$titulo1 ?? ''}} <span style="color: #711BA4">{{ $titulo2 }}</span></h1>
                {{ $contenido ?? ''}}

            </div>
        </div>
    </div>
</section>
@extends('layouts.app')



@section('titulo', 'Clínica Médica')


@section('contenido')

{{-- Hero Section --}}
    <br>
    <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-start">
                    <h1 class="titulo"><strong>La detección temprana <span style="color: #484FFA">salva vidas</span></strong></h1>
                    <p style="font-size: 20px">Algunos de los cánceres más comunes son <span style="color: #484FFA;">curables</span> si se detectan a tiempo, 
                        <span style="color: #484FFA">nosotros te ayudamos</span></p>                
                        <br>
                    <div class="text-start">
                        <form>
                            <button class="btn btn-sm btn-outline-primary" type="button">Conocer más</button>
                            <button class="btn btn-sm btn-outline-secondary" type="button">Agendar cita</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="col-lg-6 text-start">
                    <img src="{{ asset('images/Hero_Img.jpg') }}" alt="Logo - Clínica Médica" class="img-fluid" style="max-width: 100%; height: auto; max-height: 400px;">
                </div>

            </div>
        </div> 
    <br>
    <br>

{{-- Nuestros Estudios --}}
    {{-- <br>
    <br>
    <div class="container text-center">
        <br>
        <br>
        <h5><span style="color: #484FFA; font-size: 32px; font-weight: bold;"><strong>Prevención, Detección y Tratamiento Oportuno</strong></span></h5>
        <h5 style="font-size: 68px; font-weight: bold;"><strong>Nuestros <span style="color: #6285C4;">estudios</strong></span></h5>
        <hr class="hr-custom text-center">
        <p style="font-size: 20px; font-weight: bold;">Nuestra <span style="color: #484FFA">clínica médica</span> brinda una amplia variedad de <span style="color: #484FFA">análisis para tu salud,</span> te ayudamos con el proceso</p>

        Carrusel
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



    </div>
    <br>
    <br> --}}
@endsection





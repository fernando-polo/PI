@extends('layouts.app')



@section('titulo', 'MedCLINIC - Inicio')


@section('contenido')

{{-- Hero Section --}}
<section style="min-height: 65vh;" id="HeroSection">
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
                            <a href="#NuestrosEstudios" class="btn btn-sm btn-outline-primary">Conocer más</a>
                            <a href="{{route('rutaRegistro')}}" class="btn btn-sm btn-outline-secondary">Agendar Cita</a>
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
</section>
{{-- Nuestros Estudios --}}
<section style="min-height: 75vh;" id="NuestrosEstudios">
    <br>
    <br>
    <div class="container text-center">
        <br>
        <br>
        <h5><span style="color: #484FFA; font-size: 32px; font-weight: bold;"><strong>Prevención, Detección y Tratamiento Oportuno</strong></span></h5>
        <h5 style="font-size: 68px; font-weight: bold;"><strong>Nuestros <span style="color: #6285C4;">estudios</strong></span></h5>
        <hr class="hr-custom text-center">
        <p style="font-size: 20px; font-weight: bold;">Nuestra <span style="color: #484FFA">clínica médica</span> brinda una amplia variedad de <span style="color: #484FFA">análisis para tu salud,</span> te ayudamos con el proceso</p>

        {{-- Cards --}}
        <div class="container ">
          <div class="row gap-4 justify-content-center">
            <div class="card align-items-center justify-content-center">
              <div class="row">
                  <img src="{{ asset('images/NE_Mastografia.jpg') }}" class="card-img-top" alt="Card Mastografia" id="Card_Img_NE_Mastografia">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Mastografía</a>
              </div>
          </div>
          
          <div class="card align-items-center justify-content-center">
              <div class="row">
                  <img src="{{ asset('images/NE_Densitometria.jpg') }}" class="card-img-top" alt="Card Densitometria" id="Card_Img_NE_Densitometria">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Densitometría</a>
              </div>
          </div>
          
          <div class="card align-items-center justify-content-center">
              <div class="row">
                  <img src="{{ asset('images/NE_Papanicolau.jpg') }}" class="imagen_card card-img-top" alt="Card Papanicolau" id="Card_Img_NE_Papanicolau">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Papanicolau</a>
              </div>
          </div>
          
          <div class="card align-items-center justify-content-center">
              <div class="row">
                  <img src="{{ asset('images/NE_Ultrasonido.jpg') }}" class="card-img-top" alt="Card Ultrasonido" id="Card_Img_NE_Ultrasonido">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Ultrasonido</a>
              </div>
          </div>
          
          <div class="card align-items-center justify-content-center">
              <div class="row">
                  <img src="{{ asset('images/NE_VPH.jpg') }}" class="card-img-top" alt="Card VPH" id="Card_Img_NE_VPH">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Electrocardiograma</a>
              </div>
          </div>
          
            
            
          </div>
        </div>
    </div>
    <br>
    <br>
</section>

{{-- Médicos de primera --}}
<section style="min-height: 75vh;" id="MedicosDePrimera">
  <br>
  <br>
  <div class="container text-center">
    <h5><span style="color: #484FFA; font-size: 32px; font-weight: bold;"><strong>Seguridad y bienestar</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong><span style="color: #6285C4;"> Médicos</span> de primera</strong></h5>
    <hr class="hr-custom text-center">
    <p style="font-size: 20px; font-weight: bold;">Nuestros  <span style="color: #484FFA">médicos</span> con más de <span style="color: #484FFA">20 años de experiencia </span> para el servicio tuyo y de tu familia.</p>

    <br>

    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</section>

{{-- Tu Testimonio importa --}}
<section style="min-height: 75vh;" id="Testimonios">
  <br>
  <br>
  <div class="container text-center">
    <h5><span style="color: #484FFA; font-size: 32px; font-weight: bold;"><strong>Sinceridad ante todo</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong>Tu<span style="color: #6285C4;"> Testimonio</span> importa</strong></h5>
    <hr class="hr-custom text-center">
    <p style="font-size: 20px; font-weight: bold;"><span style="color: #484FFA">Cuidamos de tu familia y de ti, </span>los siguientes testimnoios lo demuestran</p>

    <br>

    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #484FFA; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #6285C4; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</section>


{{-- Sobre nosotros --}}
<section style="min-height: 75vh;" id="SobreNosotros">
  <br>
  <br>
  <div class="container text-center">
    <h5><span style="color: #484FFA; font-size: 32px; font-weight: bold;"><strong>Nuestra historia como institución</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong>Sobre <span style="color: #6285C4;">Nosotros</span></strong></h5>
    <hr class="hr-custom text-center">
    <div class="row align-items-center">
      <div class="col">
        <br>
        <p class="text-start"> <span style="color: #484FFA; font-size: 16px; font-weight: bold;">La Clínica MedCLINIC</span> es un centro de atención integral que ofrece una amplia gama de servicios médicos en cuanto a la detección de cáncer a termpana edad. Con un equipo de profesionales altamente capacitados, modernas instalaciones y tecnología de vanguardia granatizamos a mejor experiencia y bienestar de sus pacientes. La Clínica MedCLINIC se compromete a proporcionar un servicio humano y accesible, brindando seguridad y confianza en cada consulta.</p>
      </div>
      <div class="col">
        <img src="{{ asset('images/Logo1.jpeg') }}" alt="Logo - Clínica Médica" class="img-fluid text-start" style="max-width: 100%; height: auto; max-height: 400px;">
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@endsection





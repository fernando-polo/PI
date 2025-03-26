@extends('layouts.app')



@section('titulo', 'MedCLINIC - Inicio')


@section('contenido')

{{-- Hero Section --}}
<section style="min-height: 65vh;" id="HeroSection">
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-start">
                    <h1 class="titulo"><strong>La detección temprana te puede <span style="color: #711BA4">salvar la vida</span></strong></h1>
                    <p style="font-size: 20px">Algunos de los cánceres más comunes son <span style="color: #8F7ada;">curables</span> si se detectan a tiempo, 
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
    <br>
</section>
{{-- Nuestros Estudios --}}
<section style="min-height: 75vh;" id="NuestrosEstudios">
    <br>
    <br>
    <div class="container text-center">
        <br>
        <br>
        <h5><span style="color: #711BA4; font-size: 32px; font-weight: bold;"><strong>Prevención, Detección y Tratamiento Oportuno</strong></span></h5>
        <h5 style="font-size: 68px; font-weight: bold;"><strong>Nuestros <span style="color: #8F7ada;">estudios</strong></span></h5>
        <hr class="hr-custom text-center">
        <p style="font-size: 20px; font-weight: bold;">Nuestra <span style="color: #711BA4">clínica médica</span> te ofrece los <span style="color: #711BA4">análisis de salud</span> que necesitas y el apoyo que mereces.</p>

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
                  <img src="{{ asset('images/NE_Tomografia.jpg') }}" class="card-img-top" alt="Card Densitometria" id="Card_Img_NE_Densitometria">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Tomografías</a>
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
                  <img src="{{ asset('images/NE_Colonoscopia.jpg') }}" class="card-img-top" alt="Card VPH" id="Card_Img_NE_VPH">
              </div>
              <br>
              <div class="row">
                  <a href="{{route('rutaseleccionarEstudio')}}" class="btn btn-sm btn-outline-secondary">Colonoscopia</a>
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
    <h5><span style="color: #711BA4; font-size: 32px; font-weight: bold;"><strong>Seguridad y bienestar</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong><span style="color: #8F7ada;"> Médicos</span> de primera</strong></h5>
    <hr class="hr-custom text-center">
    <p style="font-size: 20px; font-weight: bold;">Con más de <span style="color: #711BA4">20 años de experiencia,</span> nuestros <span style="color: #8F7ada">médicos</span> están comprometidos con el bienestar de tu familia.</p>
    <br>

    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Dr. Myrna Maldonado</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">Especialidad</span><p>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">No. de Cédula</span></p>
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
    <h5><span style="color: #711BA4; font-size: 32px; font-weight: bold;"><strong>Sinceridad ante todo</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong>Tu<span style="color: #8F7ada;"> Testimonio</span> importa</strong></h5>
    <hr class="hr-custom text-center">
    <p style="font-size: 20px; font-weight: bold;"><span style="color: #711BA4">Cuidamos de ti y de los tuyos</span>. Los testimonios confirman nuestro compromiso.</p>
    <br>

    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
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
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><span style="color: #711BA4; font-size: 20px; font-weight: bold;">Nombre - Usuario</span></h5>
            <p class="card-text"><span style="color: #8F7ada; font-size: 16px; font-weight: bold;">'@ Usuario'</span><p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</section>

{{-- Referencias Nacionales --}}
<section style="min-height: 75vh;" id="ReferenciasNacionales">
  <br>
  <br>
  <div class="container text-center">
    <h5><span style="color: #711BA4; font-size: 32px; font-weight: bold;"><strong>Colaboración nacional</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong>Organizaciones<span style="color: #8F7ada;"> Mexicanas</span></strong></h5>
    <hr class="hr-custom text-center">
    <p style="font-size: 20px; font-weight: bold;">
      En México, diversas organizaciones <span style="color: #711BA4;">trabajan incansablemente</span> para prevenir, tratar y apoyar a quienes enfrentan el cáncer. Descubre cómo pueden ayudarte o cómo puedes contribuir.
    </p>

    <br>

    {{-- Cards con enlaces a las organizaciones --}}
    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <span style="color: #711BA4; font-size: 20px; font-weight: bold;">FUCAM</span>
            </h5>
            <p class="card-text">
              Fundación especializada en la detección y tratamiento del cáncer de mama en mujeres mexicanas.
            </p>
            <a href="https://www.fucam.org.mx" target="_blank" class="btn btn-sm btn-outline-primary">
              Visitar sitio web
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <span style="color: #711BA4; font-size: 20px; font-weight: bold;">Casa de la amistad</span>
            </h5>
            <p class="card-text">
              Asociación dedicada a brindar apoyo integral a niños con cáncer y sus familias.
            </p>
            <a href="https://www.casadelaamistad.org.mx/angel-guardian" target="_blank" class="btn btn-sm btn-outline-primary">
              Visitar sitio web
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <span style="color: #711BA4; font-size: 20px; font-weight: bold;">AMLCC</span>
            </h5>
            <p class="card-text">
              Instituto Nacional de Cancerología, líder en investigación, tratamiento y prevención del cáncer en México.
            </p>
            <a href="https://www.amlcc.org/" target="_blank" class="btn btn-sm btn-outline-primary">
              Visitar sitio web
            </a>
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
    <h5><span style="color: #711BA4; font-size: 32px; font-weight: bold;"><strong>Nuestra historia como institución</strong></span></h5>
    <h5 style="font-size: 68px; font-weight: bold;"><strong>Sobre <span style="color: #8F7ada;">Nosotros</span></strong></h5>
    <hr class="hr-custom text-center">
    <div class="row align-items-center">
      <div class="col">
        <br>
        <p class="text-start"> <span style="color: #711BA4; font-size: 16px; font-weight: bold;">La Clínica MedCLINIC</span> es un centro de atención integral que ofrece una amplia gama de servicios médicos en cuanto a la detección de cáncer a termpana edad. Con un equipo de profesionales altamente capacitados, modernas instalaciones y tecnología de vanguardia granatizamos a mejor experiencia y bienestar de sus pacientes. La Clínica MedCLINIC se compromete a proporcionar un servicio humano y accesible, brindando seguridad y confianza en cada consulta.</p>
      </div>
      <div class="col">
        <img src="{{ asset('images/OncoCheck.jpeg') }}" alt="Logo - Clínica Médica" class="img-fluid text-start" style="max-width: 100%; height: auto; max-height: 400px;">
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@endsection





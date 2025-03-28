<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- codifcación -->
        <meta charset="UTF-8">

        <!-- Adaptabilidad en el sitio, el ancho del contenido sea igual al ancho de la pantalla de cada dispositivo -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- instrucción para Internet Explorer (IE), indicándole que use la última versión de su motor de renderizado (conocido como "edge mode"). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Le decimos a google que indexe la página y que siga los enlaces -->
        <meta name="robots" content="index, follow">

        <!-- Título del documento, Importante para el SEO, título que aparece en google -->
        <title>@yield('titulo')</title>

        <!-- Descripción del sitio web, GENERALMENTE aparece en google al igual que el título  -->
        <meta name="description" content="Clínica Médica _ Proyecto UPQ">

        <!-- Color de la página web -->
        <meta name="theme-color" content="8F7ada">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('OncoCheck.ico') }}">

        <!-- OPEN GRAPH! -->
        <meta property="og:title" content="Clínica Médica">
        <meta property="og:description" content="El consultorio suele contar con equipamiento básico para la evaluación clínica y acceso a tecnologías más avanzadas, como estudios de imagen, laboratorio y tratamientos especializados.">
        <meta property="og:image" content="{{ asset('images/OncoCheck.jpeg') }}">
        <meta property="og:image/alt" content="Logo Clínica Médica">

        {{-- Llamar a CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- LLamar a SweetAlert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        {{-- Llamar a bootstrap --}}
        @vite('resources/js/app.js')

        <style>
            #NavBar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                transition: all 0.3s ease;
            }
            
            body {
                padding-top: 80px; /* Ajusta según la altura de tu navbar */
            }
            
            /* Opcional: Efecto al hacer scroll */
            #NavBar.navbar-scrolled {
                padding-top: 5px;
                padding-bottom: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <header>
              <nav class="navbar navbar-expand-lg navbar-light bg-light py-4" id="NavBar">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <a href="{{route('rutaInicio')}}"><img src="{{ asset('images/OncoCheck.jpeg') }}" alt="Logo - Clínica Médica" width="50" height="50"></a>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2 ms-2"> 
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('rutaInicio', [], false) }}#NuestrosEstudios">Estudios</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('rutaInicio', [], false) }}#MedicosDePrimera">Médicos</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('rutaInicio', [], false) }}#Testimonios">Testimonios</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('RutaAyudaEmocional') }}">Ayuda emocional</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('rutaInicio', [], false) }}#SobreNosotros">Nosotros</a>
                      </li>
                    </ul>
                    <div class="text-end">
                        <form class="container-fluid justify-content-end">
                            <a href="{{route('rutainiciarSesionAdmin')}}" class="btn btn-sm btn-outline-primary" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">Administrativo</a>
                            <a href="{{route('rutaRegistro')}}" class="btn btn-sm btn-outline-primary" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">Registrarse</a>
                            <a href="{{route('rutaIniciarSesion')}}" class="btn btn-sm btn-outline-secondary" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">Iniciar Sesión</a>             
                        </form>
                    </div>
                  </div>
                </div>
              </nav>
        </header>

        @yield('contenido')

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <img src="{{asset('images/OncoCheck.jpeg')}}" alt="Logo Clínica Médica" width="40" height="40">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Copyright © 2025 OncoCheck
                            Todos los derechos reservados.</p>
                    </div>
                    <div class="col-2">
                        <h5>Clínica</h5>
                        <br>
                        <a class="nav-link" href="{{ route('rutaInicio', [], false) }}#NuestrosEstudios"><h6>Estudios</h6></a>
                        <br>
                        <a class="nav-link" href="{{ route('rutaInicio', [], false) }}#MedicosDePrimera"><h6>Médicos</h6></a>
                        <br>
                        <a class="nav-link" href="{{ route('rutaInicio', [], false) }}#Testimonios"><h6>Testimonios</h6></a>
                        <br>
                        <a href="{{ route('rutaInicio', [], false) }}#ReferenciasNacionales"><h6>Ayuda</h6></a>
                        <br>
                        <a class="nav-link" href="{{ route('rutaInicio', [], false) }}#SobreNosotros"><h6>Conócenos</h6></a>
                        <br>
                    </div>
                    <div class="col-2">
                        <h5>Contacto</h5>
                        <br>
                        <a href=""><h6>Facebook</h6></a>
                        <br>
                        <a href=""><h6>Instagram</h6></a>
                        <br>
                        <a href=""><h6>Email</h6></a>
                        <br>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Opcional: Efecto al hacer scroll
            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('NavBar');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        </script>
    </body>
</html>
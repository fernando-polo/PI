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
        <title>Iniciar sesión: Administrador</title>

        <!-- Descripción del sitio web, GENERALMENTE aparece en google al igual que el título  -->
        <meta name="description" content="Clínica Médica _ Proyecto UPQ">

        <!-- Color de la página web -->
        <meta name="theme-color" content="#ff5733">

        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('Logo2.ico') }}">

        <!-- OPEN GRAPH! -->
        <meta property="og:title" content="Clínica Médica">
        <meta property="og:description" content="El consultorio suele contar con equipamiento básico para la evaluación clínica y acceso a tecnologías más avanzadas, como estudios de imagen, laboratorio y tratamientos especializados.">
        <meta property="og:image" content="{{ asset('images/Logo2.png') }}">
        <meta property="og:image/alt" content="Logo Clínica Médica">

        {{-- Llamar a CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        {{-- LLamar a SweetAlert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        

        {{-- LLamar a iconos de bootstraps --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        
        {{-- Llamar a bootstrap --}}
        @vite('resources/js/app.js')



    </head>
    <body>
        <header> 
            <nav>            
                <div class="container-fluid">
                    <div class="row mt-2 mb-2">
                        <div class="col text-left">
                            <a href="{{route('rutaInicio')}}"><img src="{{ asset('images/Logo2.png') }}" alt="Logo - Clínica Médica" width="40" height="40"></a>
                        </div>
                    </div>
                </div>
            </nav>  
        </header>
        <div class="container" >
            
            <br>
            <h1 class="text-center">Iniciar sesión - Vista Administrativa (Prototipo)</h1>
            <hr class="hr-custom">

      <div class="card-body text-justify">  
          <div class="mb-3">
            <label for="Correo" class="form-label">Correo: </label>
            <input type="text" class="form-control" name="txtCorreo" value="{{ old('txtCorreo') }}">
            <small class="text-danger">{{ $errors->first('txtCorreo') }}</small>
          </div>
          <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="txtContraseña">
            <small class="text-danger">{{ $errors->first('txtContraseña') }}</small>
          </div>
          <div class="card-footer text-muted">
            <div class="row">
                <div class="col">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="button" class="btn btn-sm btn-outline-primary">Limpiar</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <a href="{{route('rutavistasAdmin')}}" class="btn btn-sm btn-outline-secondary">Iniciar sesión</a>
                    </div>
                </div>
            </div>
          </div>
        <h5 class="mt-3" style="font-size: 12px"><a href="#"><span style="color: #ff5733">¿Olvidaste tu contraseña?</span></a></h5>
      </div>
    </div>
        </div>
    </body>
</html>
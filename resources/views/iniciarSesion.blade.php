@extends('layouts.app')

@section('titulo', 'MedCLINIC - Iniciar Sesión')


@section('contenido')

<section style="min-height: 65vh;">
<div class="container mt-5 col-md-6">

      @session ('datosValidados')
        <script>
            Swal.fire({
              text: "Datos correctos",
              icon: "success",
              confirmButtonText: "Aceptar",
                customClass: {
                    confirmButton: 'custom-confirm-button-datosValidados'
                }
          });
        </script>
      @endsession

    <div class="card">
      <div class="card-header fs-5 text-center text-primary">
        <span style="color: #ff5733">Iniciar sesión</span>
      </div>
  
      <div class="card-body text-justify">
        <form action="/iniciarSesionFormulario" method="post" id="formRegistro">
          @csrf    
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
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('formRegistro').reset();">Limpiar</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Guardar datos</button>
                    </div>
                </div>
            </div>
          </div>
        </form>
        <h5 class="mt-3" style="font-size: 12px"><a href="#"><span style="color: #ff5733">¿Olvidaste tu contraseña?</span></a></h5>
      </div>
    </div>
  </div>
  <br>

</section>

@endsection


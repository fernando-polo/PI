@extends('layouts.app')

@section('titulo', 'MedCLINIC - Iniciar Sesión')


@section('contenido')

<div class="container mt-5 col-md-6">

      @session ('exito')
        <script>
            Swal.fire({
              text: "Datos correctos",
              icon: "success"
          });
        </script>
      @endsession

    <div class="card">
      <div class="card-header fs-5 text-center text-primary">
        Iniciar sesión
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
      </div>
    </div>
  </div>
  <br>


@endsection

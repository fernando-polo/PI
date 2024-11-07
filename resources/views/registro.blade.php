@extends('layouts.app')



@section('titulo', 'MedCLINIC - Registro')


@section('contenido')

<section style="min-height: 100vh;"> 
  <div class="container mt-5 col-md-6">

        @session ('usuarioGuardado')
          <script>
              Swal.fire({
                text: "Se guardó el usuario: {{$value}}",
                icon: "success"
            });
          </script>
        @endsession

      <div class="card">
        <div class="card-header fs-5 text-center text-primary">
          ¡Regístrate para agendar una cita!
        </div>
    
        <div class="card-body text-justify">
          <form action="/registrarUsuario" method="post" id="formRegistro">
            @csrf    
            <div class="mb-3">
              <label for="CURP" class="form-label">CURP: </label>
              <input type="text" class="form-control" name="txtCURP" value="{{ old('txtCURP') }}">
              <small class="text-danger">{{ $errors->first('txtCURP') }}</small>
            </div>
            <div class="mb-3">
              <label for="Nombre" class="form-label">Nombre: </label>
              <input type="text" class="form-control" name="txtNombre" value="{{ old('txtNombre') }}">
              <small class="text-danger">{{ $errors->first('txtNombre') }}</small>
            </div>
            <div class="mb-3">
              <label for="APaterno" class="form-label">Apellido Paterno: </label>
              <input type="text" class="form-control" name="txtAPaterno" value="{{ old('txtAPaterno') }}">
              <small class="text-danger">{{ $errors->first('txtAPaterno') }}</small>
            </div>
            <div class="mb-3">
              <label for="AMaterno" class="form-label">Apellido Materno: </label>
              <input type="text" class="form-control" name="txtAMaterno" value="{{ old('txtAMaterno') }}">
              <small class="text-danger">{{ $errors->first('txtAMaterno') }}</small>
            </div>
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
            <div class="mb-3">
              <label for="Telefono" class="form-label">Número de teléfono: </label>
              <input type="text" class="form-control" name="txtTelefono">
              <small class="text-danger">{{ $errors->first('txttelefono') }}</small>
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
</section>
@endsection
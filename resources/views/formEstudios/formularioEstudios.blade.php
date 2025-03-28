@extends('layouts.app')

@section('titulo', 'MedCLINIC - Registro de Estudios')

@section('contenido')
<section style="min-height: 100vh;"> 
  <div class="container mt-5 col-md-6">
        @if(session('estudioGuardado'))
          <script>
            Swal.fire({
                text: "Se guardó el estudio: {{ session('estudioGuardado') }}",
                icon: "success",
                confirmButtonText: "Aceptar",
                customClass: {
                    confirmButton: 'custom-confirm-button-estudioGuardado'
                }
            });
          </script>
        @endif

      <div class="card">
        <div class="card-header fs-5 text-center text-primary">
          <span style="color: #ff5733">Registro de estudios médicos</span>
        </div>
    
        <div class="card-body text-justify">
          <form action="{{ route('rutaGuardarEstudios') }}" method="post" id="formRegistroEstudio">
            @csrf    
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre del Estudio:</label>
              <input type="text" class="form-control" name="txtNombre" value="{{ old('txtNombre') }}">
              <small class="text-danger">{{ $errors->first('txtNombre') }}</small>
            </div>
            <div class="mb-3">
              <label for="especialidad" class="form-label">Especialidad:</label>
              <input type="text" class="form-control" name="txtEspecialidad" value="{{ old('txtEspecialidad') }}">
              <small class="text-danger">{{ $errors->first('txtEspecialidad') }}</small>
            </div>
            <div class="mb-3">
              <label for="requisitos" class="form-label">Requisitos:</label>
              <textarea class="form-control" name="txtRequisitos">{{ old('txtRequisitos') }}</textarea>
              <small class="text-danger">{{ $errors->first('txtRequisitos') }}</small>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio:</label>
              <input type="text" class="form-control" name="txtPrecio" value="{{ old('txtPrecio') }}">
              <small class="text-danger">{{ $errors->first('txtPrecio') }}</small>
            </div>
            <div class="card-footer text-muted">
              <div class="row">
                  <div class="col">
                      <div class="d-grid gap-2 mt-2 mb-1">
                          <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('formRegistroEstudio').reset();">Limpiar</button>
                      </div>
                  </div>
                  <div class="col">
                      <div class="d-grid gap-2 mt-2 mb-1">
                          <button type="submit" class="btn btn-sm btn-outline-secondary">Registrar Estudio</button>
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

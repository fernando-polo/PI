@extends('layouts.templateVAdmin')

@section('contenidoRegistros')

@section('btn1')
    <a href="{{route('rutaadminMedicos')}}" id="btnIconoCalendario" class="btn btn-outline-primary">
        <i class="bi bi-calendar"></i>        
        Médicos
    </a>
@endsection

@section('btn2')
    <a href="{{route('rutaadminUsuarios')}}" id="btnIconoCitasProximas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-plus"></i>
        Usuarios 
    </a>
@endsection

@section('btn3')
    <a href="{{route('rutaadminEstudios')}}" id="btnIconoCitasRealizadas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-check"></i>        
        Estudios
    </a>
@endsection

<!-- Barra de búsqueda y botón -->
<div class="d-flex justify-content-end mt-3">
    <input type="text" class="form-control me-2" style="width: 200px; border-color: #6b46c1; color: #6b46c1;" placeholder="Buscar usuario...">
    <button type="button" class="btn" style="background-color: #e9d8fd; color: #6b46c1;">Buscar</button>
</div>
<br>
<!-- Tabla de médicos registrados -->
<div class="card shadow-sm">
    <div class="card-header text-white" style="background-color:    #6b46c1;">
        <h5 class="mb-0">Usuarios Registrados</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr style="background-color: #e9d8fd;">
                        <th>Nombre Paciente</th>
                        <th>CURP</th>
                        <th>No. Expediente</th>
                        <th>Estatus</th>
                        <th>Incidencias</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Michelle Wendolyn Quintero Moreno</td>
                        <td>QUMM65656165HS</td>
                        <td>#003584</td>
                        <td><span class="badge" style="background-color: #38a169; color: white;">ACTIVO</span></td>
                        <td>N/A</td>
                        <td>
                            <button class="btn btn-sm" style="background-color: #fed7d7; color: #9b2c2c;">
                                <i class="bi bi-trash"></i> 
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
{{-- Será un componente dinámico --}}

<div class="container mt-4 mb-4" style="background-color: white; border-radius:12px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">
    <div class="col">
        <br>
        <h3 >Resumen de la cita - Estatus: pendiente. </h3>
        <h5>Estudio seleccionado: <span style="color: #484FFA"> Densitometría ósea de columna y fémur </span></h5>
        <h5>Precio total del estudio (IVA incluido):<span style="color: #484FFA"> $75.00 </span></h5>
        <h5>Fecha y hora de la cita:<span style="color: #484FFA"> 03 / 06 / 24 - 13:00 p.m. </span></h5>
    </div>
    <div class="col">
        <br>
        {{ $boton ?? ''}}
    </div>
</div>
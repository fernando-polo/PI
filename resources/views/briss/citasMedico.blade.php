<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoCheck - Agenda Clínica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .top-navbar {
            background-color: #6a1b9a;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        .main-nav {
            display: flex;
            gap: 25px;
        }
        .main-nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }
        .main-nav a:hover {
            text-decoration: underline;
        }
        .auth-nav {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .auth-nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }
        .auth-nav a:not(:last-child) {
            border-right: 1px solid white;
            padding-right: 15px;
        }
        .user-icon {
            background-color: white;
            color: #6a1b9a;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .user-icon:hover {
            transform: scale(1.1);
        }
        .navbar {
            background-color: #6a1b9a;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-right: 30px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 0;
            position: relative;
        }
        .nav-link:hover {
            color: #f3e5f5;
        }
        .nav-link.active {
            color: white;
            font-weight: bold;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: white;
        }
        .main-content {
            padding: 20px;
            flex: 1;
            display: flex;
            gap: 20px;
        }
        .left-column {
            flex: 1;
            min-width: 350px;
            max-width: 400px;
        }
        .right-column {
            flex: 2;
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        .header-bar {
            background-color: #f3e5f5;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .header-bar h1 {
            color: #6a1b9a;
            font-size: 24px;
            margin-bottom: 0;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #6a1b9a;
        }
        h3 {
            font-size: 18px;
            color: #6a1b9a;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .divider {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
        .footer {
            background-color: #e0e0e0;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            border-top: 1px solid #d0d0d0;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #6a1b9a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #5a148a;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
        }
        .purple-card {
            background-color: #f3e5f5;
        }
        .doctor-card {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .doctor-info {
            flex: 1;
        }
        .appointment-item {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .appointment-item:last-child {
            border-bottom: none;
        }
        .prescription-item {
            margin-bottom: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .prescription-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .prescription-detail {
            margin-bottom: 5px;
        }
        .no-data {
            color: #999;
            font-style: italic;
        }
        .contact-info {
            margin-top: 15px;
        }
        .contact-info p {
            margin: 5px 0;
        }

         /* Estilos para el componente de perfil médico dinámico */
         .doctor-profile-container {
            background-color: #f8f5fc;
            border-radius: 10px;
            padding: 70px;
            box-shadow: 0 2px 10px rgba(106, 27, 154, 0.1);
            margin-bottom: 20px;
            height: fit-content;
        }
        
        /* Estilos para el calendario */
        .calendar-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .calendar-month {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #6a1b9a;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f3e5f5;
        }
        
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        
        .calendar-day {
            padding: 10px;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .calendar-day:hover {
            background-color: #f3e5f5;
        }
        
        .calendar-day.empty {
            visibility: hidden;
        }
        
        .calendar-day.today {
            background-color: #6a1b9a;
            color: white;
            font-weight: bold;
        }
        
        .calendar-day.selected {
            background-color: #9c27b0;
            color: white;
            font-weight: bold;
        }
        
      
/* Estilos para el contenedor de información profesional - Modal Estrecho y Alto */
.doctor-profile-container {
    background-color: #f3e5f5;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(106, 27, 154, 0.15);
    width: 380px; /* Ancho reducido */
    max-height: 85vh; /* Altura máxima */
    overflow-y: auto; /* Scroll vertical si es necesario */
    margin: 20px auto;
}

/* Estilos para la tabla de información - Versión Vertical */
.doctor-info-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85rem; /* Texto más pequeño */
}

.doctor-info-table tr {
    display: flex;
    flex-direction: column;
    margin-bottom: 12px;
}

.doctor-info-table th {
    color: #6a1b9a;
    font-weight: 600;
    text-align: left;
    padding: 5px 0;
    width: 100%;
}

.doctor-info-table td {
    color: #333;
    padding: 5px 0 12px 0;
    width: 100%;
    word-break: break-word; /* Ajuste de texto largo */
}

/* Encabezado del perfil */
.doctor-profile-header h2 {
    color: #6a1b9a;
    font-size: 1.3rem;
    margin-bottom: 15px;
    text-align: center;
    padding-bottom: 10px;
    border-bottom: 1px solid #d1c4e9;
}

/* Barra de desplazamiento personalizada */
.doctor-profile-container::-webkit-scrollbar {
    width: 6px;
}

.doctor-profile-container::-webkit-scrollbar-track {
    background: #e9d8f7;
    border-radius: 3px;
}

.doctor-profile-container::-webkit-scrollbar-thumb {
    background: #9c64c6;
    border-radius: 3px;
}

/* Ajustes para el calendario dentro del modal */
.calendar-section {
    margin-top: 20px;
}

.calender-title {
    color: #6a1b9a;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 10px;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 4px;
    font-size: 0.8rem;
}

.calendar-header {
    font-weight: bold;
    color: #6a1b9a;
    text-align: center;
    padding: 5px 0;
}

.calendar-day {
    background-color: white;
    padding: 8px 5px;
    text-align: center;
    border-radius: 3px;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}

/* Ajustes de texto responsivo */
@media (max-width: 400px) {
    .doctor-profile-container {
        width: 95%;
        padding: 15px;
    }
    
    .doctor-info-table {
        font-size: 0.8rem;
    }
}

/* Estilos para la información del doctor */
.doctor-info-container {
    text-align: left;
    padding: 15px;
}

.doctor-info-container h3 {
    color: #6a1b9a;
    margin-bottom: 15px;
    font-size: 1.4rem;
    text-align: center;
}

.doctor-detail {
    margin-bottom: 12px;
    font-size: 1rem;
    display: flex;
}

.doctor-detail i {
    color: #6a1b9a;
    margin-right: 10px;
    width: 20px;
    text-align: center;
}

.specialty {
    color: #6a1b9a;
    font-weight: bold;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 15px;
    display: block;
}

/* Estilos para el modal */
.modal-content {
    background-color: #f3e5f5;
    border-radius: 10px;
    padding: 25px;
    width: 90%;
    max-width: 900px;
}

.modal-title {
    color: #6a1b9a;
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
    border-bottom: 2px solid #d1c4e9;
    padding-bottom: 10px;
}

        /* Estilos para el botón Agenda Clínica */
        .agenda-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: transparent;
            color: #6a1b9a;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #6a1b9a;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .agenda-btn:hover {
            background-color: #6a1b9a;
            color: white;
        }

       /* Estilos para el modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    overflow: auto; /* Permite scroll en el modal si el contenido es muy largo */
}

.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 30px;
    border-radius: 10px;
    width: 70%;
    max-width: 800px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
    max-height: 80vh; /* Altura máxima del 80% del viewport */
    overflow-y: auto; /* Scroll vertical cuando el contenido excede la altura */
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 24px;
    color: #aaa;
    cursor: pointer;
}

.close-btn:hover {
    color: #6a1b9a;
}

.modal-title {
    color: #6a1b9a;
    margin-bottom: 20px;
    text-align: center;
    position: sticky;
    top: 0;
    background-color: white;
    padding-bottom: 10px;
    z-index: 1;
}

.appointment-summary {
    margin-bottom: 25px;
    padding: 15px;
    border-radius: 8px;
    background-color: #f9f3fc;
    border-left: 4px solid #6a1b9a;
}

.appointment-summary h3 {
    color: #6a1b9a;
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 18px;
}

.appointment-detail {
    display: flex;
    margin-bottom: 5px;
}

.appointment-label {
    font-weight: bold;
    width: 100px;
    color: #555;
}

.appointment-value {
    flex: 1;
}

/* Estilos para la barra de desplazamiento */
.modal-content::-webkit-scrollbar {
    width: 8px;
}

.modal-content::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.modal-content::-webkit-scrollbar-thumb {
    background: #c4a3d8;
    border-radius: 10px;
}

.modal-content::-webkit-scrollbar-thumb:hover {
    background: #6a1b9a;
}
    </style>
</head>
<body>
    <!-- Barra de navegación principal -->
    <nav class="navbar">
        <div style="display: flex; align-items: center;">
            <div class="navbar-brand">OncoCheck</div>
            <div class="nav-links">
                <a href="#" class="nav-link">Citas</a>
                <a href="#" class="nav-link active">Agenda</a>
                <a href="#" class="nav-link">Historial</a>
            </div>
        </div>
        <div class="user-icon" onclick="window.location.href='perfil.html'">
            <i class="fas fa-user"></i>
        </div>
    </nav>

<!-- Contenido principal -->
<div class="main-content">
    <!-- Columna izquierda - Perfil médico dinámico -->
    <div class="left-column">
        <div class="doctor-profile-container">
            <div class="doctor-profile-header">
                <h2>Información Profesional</h2>
            </div>
            
            <div class="doctor-avatar">
                <i class="fas fa-user-md default-avatar"></i>
            </div>
            
            <div class="doctor-info-container">
                <h3>Dra. Susana Villagomez</h3>
                <p class="specialty">Medicina Interna</p>
                
                <div class="doctor-details">
                    <div class="detail-item">
                        <i class="fas fa-briefcase detail-icon"></i>
                        <span>Años de experiencia: <strong>15 años</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-phone detail-icon"></i>
                        <span>Teléfono: <strong>(555) 123-4567</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-envelope detail-icon"></i>
                        <span>Email: <strong>dra.susanavillagomez@clinicamedica.com</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-map-marker-alt detail-icon"></i>
                        <span>Dirección: <strong>Av. Salud No. 123, Ciudad Bienestar, CP 45678</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-clock detail-icon"></i>
                        <span>Horario: <strong>Lunes a Viernes de 9:00 a.m. a 5:00 p.m.</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-language detail-icon"></i>
                        <span>Idiomas: <strong>Español, Inglés</strong></span>
                    </div>
                    
                    <div class="detail-item">
                        <i class="fas fa-id-card detail-icon"></i>
                        <span>Número de licencia: <strong>MED-123456</strong></span>
                    </div>
                </div>
                
                <button class="edit-profile-btn">
                    <i class="fas fa-edit"></i> Editar información
                </button>
            </div>
        </div>
    </div>
        
        <!-- Columna derecha - Agenda Clínica -->
        <div class="right-column">
            <div class="card">
                <div class="header-bar">
                    <h1>Registros</h1>
                </div>
                
                <button id="agendaBtn" class="agenda-btn">
                    <i class="fas fa-calendar-alt"></i> Agenda Clínica
                </button>
                
                <div class="calendar-container">
                    <div class="calendar-month">Junio - 2024</div>
                    
                    <div class="calendar-weekdays">
                        <div>D</div>
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <div class="calendar-days">
                        <!-- Días vacíos para alinear el calendario -->
                        <div class="calendar-day empty"></div>
                        <div class="calendar-day empty"></div>
                        
                        <!-- Días del mes -->
                        <div class="calendar-day">2</div>
                        <div class="calendar-day">3</div>
                        <div class="calendar-day">4</div>
                        <div class="calendar-day">5</div>
                        <div class="calendar-day">6</div>
                        <div class="calendar-day">7</div>
                        <div class="calendar-day">8</div>
                        <div class="calendar-day">9</div>
                        <div class="calendar-day">10</div>
                        <div class="calendar-day">11</div>
                        <div class="calendar-day">12</div>
                        <div class="calendar-day">13</div>
                        <div class="calendar-day">14</div>
                        <div class="calendar-day">15</div>
                        <div class="calendar-day">16</div>
                        <div class="calendar-day">17</div>
                        <div class="calendar-day">18</div>
                        <div class="calendar-day">19</div>
                        <div class="calendar-day">20</div>
                        <div class="calendar-day">21</div>
                        <div class="calendar-day">22</div>
                        <div class="calendar-day">23</div>
                        <div class="calendar-day">24</div>
                        <div class="calendar-day">25</div>
                        <div class="calendar-day">26</div>
                        <div class="calendar-day">27</div>
                        <div class="calendar-day">28</div>
                        <div class="calendar-day">29</div>
                        <div class="calendar-day">30</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Agenda Clínica -->
    <div id="agendaModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal">&times;</span>
            <h2 class="modal-title">Resumen de Citas</h2>
            
            <!-- Registro 1 -->
            <div class="appointment-summary">
                <h3>Resumen de la cita</h3>
                <div class="appointment-detail">
                    <span class="appointment-label">Fecha y Hora:</span>
                    <span class="appointment-value">15/06/2024 - 10:00 AM</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Estudio:</span>
                    <span class="appointment-value">Consulta de seguimiento</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Paciente:</span>
                    <span class="appointment-value">Juan Pérez López</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">ID:</span>
                    <span class="appointment-value">CIT-2024-0015</span>
                </div>
            </div>
            
            <!-- Registro 2 -->
            <div class="appointment-summary">
                <h3>Resumen de la cita</h3>
                <div class="appointment-detail">
                    <span class="appointment-label">Fecha y Hora:</span>
                    <span class="appointment-value">16/06/2024 - 11:30 AM</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Estudio:</span>
                    <span class="appointment-value">Análisis de resultados</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Paciente:</span>
                    <span class="appointment-value">María González Sánchez</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">ID:</span>
                    <span class="appointment-value">CIT-2024-0016</span>
                </div>
            </div>
            
            <!-- Registro 3 -->
            <div class="appointment-summary">
                <h3>Resumen de la cita</h3>
                <div class="appointment-detail">
                    <span class="appointment-label">Fecha y Hora:</span>
                    <span class="appointment-value">17/06/2024 - 09:15 AM</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Estudio:</span>
                    <span class="appointment-value">Revisión postoperatoria</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Paciente:</span>
                    <span class="appointment-value">Carlos Ruiz Martínez</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">ID:</span>
                    <span class="appointment-value">CIT-2024-0017</span>
                </div>
            </div>
            
            <!-- Registro 4 -->
            <div class="appointment-summary">
                <h3>Resumen de la cita</h3>
                <div class="appointment-detail">
                    <span class="appointment-label">Fecha y Hora:</span>
                    <span class="appointment-value">18/06/2024 - 03:45 PM</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Estudio:</span>
                    <span class="appointment-value">Primera consulta</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Paciente:</span>
                    <span class="appointment-value">Ana Torres Jiménez</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">ID:</span>
                    <span class="appointment-value">CIT-2024-0018</span>
                </div>
            </div>
            
            <!-- Registro 5 -->
            <div class="appointment-summary">
                <h3>Resumen de la cita</h3>
                <div class="appointment-detail">
                    <span class="appointment-label">Fecha y Hora:</span>
                    <span class="appointment-value">19/06/2024 - 02:00 PM</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Estudio:</span>
                    <span class="appointment-value">Control de tratamiento</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">Paciente:</span>
                    <span class="appointment-value">Luis Fernández García</span>
                </div>
                <div class="appointment-detail">
                    <span class="appointment-label">ID:</span>
                    <span class="appointment-value">CIT-2024-0019</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>Copyright © 2025 OncoCheck<br>Todos los derechos reservados.</p>
    </footer>

    <script>
        // Puedes añadir aquí funcionalidad JavaScript para el calendario
        document.addEventListener('DOMContentLoaded', function() {
            const days = document.querySelectorAll('.calendar-day:not(.empty)');
            
            days.forEach(day => {
                day.addEventListener('click', function() {
                    // Remover selección previa
                    days.forEach(d => d.classList.remove('selected'));
                    // Seleccionar día clickeado
                    this.classList.add('selected');
                    // Aquí podrías cargar las citas para este día
                });
            });
            
            // Marcar el día actual (ejemplo)
            const today = new Date().getDate();
            if (new Date().getMonth() === 5) { // Junio es el mes 5 (0-indexado)
                days[today - 1].classList.add('today');
            }

            // Funcionalidad del modal
            const modal = document.getElementById('agendaModal');
            const btn = document.getElementById('agendaBtn');
            const span = document.getElementById('closeModal');

            btn.onclick = function() {
                modal.style.display = "block";
            }

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
</body>
</html>
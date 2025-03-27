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
        
      
        
        .doctor-info-container {
            text-align: center;
        }
        
        .doctor-info-container h3 {
            color: #333;
            margin-bottom: 5px;
            font-size: 1.3rem;
        }
        
        .doctor-detail {
            margin-bottom: 10px;
            font-size: 0.95rem;
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
                
                <h2>Agenda Clínica</h2>
                
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
        });
    </script>
</body>
</html>
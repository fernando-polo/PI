<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoCheck - Administración de Citas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a1b9a;
            --primary-light: #f3e5f5;
            --secondary-color: #9c27b0;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --medium-gray: #e0e0e0;
            --dark-gray: #7f8c8d;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-color);
            background-color: var(--light-gray);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Barra de navegación */
        .navbar {
            background-color: var(--primary-color);
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--white);
        }
        
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: var(--white);
            margin-right: 30px;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-link {
            color: var(--white);
            text-decoration: none;
            font-weight: bold;
            padding: 5px 0;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary-light);
        }
        
        .nav-link.active {
            color: var(--white);
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--white);
        }
        
        .user-icon {
            background-color: var(--white);
            color: var(--primary-color);
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
        
        /* Contenido principal */
        .main-content {
            display: flex;
            flex: 1;
            padding: 20px;
            gap: 20px;
        }
        
        .sidebar {
            width: 250px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        .content-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        /* Estilos para la barra de título */
        .header-bar {
            background-color: var(--primary-light);
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }
        
        .header-bar h1 {
            color: var(--primary-color);
            font-size: 24px;
            margin-bottom: 0;
        }
        
        /* Estilos para tarjetas */
        .card {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        .card-title {
            font-size: 18px;
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--medium-gray);
        }
        
        /* Estilos para listas */
        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .menu-item {
            padding: 10px 0;
            border-bottom: 1px solid var(--medium-gray);
        }
        
        .menu-item:last-child {
            border-bottom: none;
        }
        
        .menu-link {
            color: var(--text-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }
        
        .menu-link:hover {
            color: var(--primary-color);
        }
        
        .menu-link i {
            width: 20px;
            text-align: center;
        }
        
        /* Estilos para el horario */
        .schedule-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .schedule-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .schedule-day {
            width: 50px;
            font-weight: bold;
        }
        
        .schedule-time {
            flex: 1;
        }
        
        .schedule-actions {
            display: flex;
            gap: 10px;
        }
        
        .schedule-status {
            font-style: italic;
            color: var(--dark-gray);
        }
        
        /* Estilos para el calendario */
        .calendar-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .calendar-title {
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        
        .calendar-header {
            font-weight: bold;
            text-align: center;
            padding: 5px;
            color: var(--primary-color);
        }
        
        .calendar-day {
            text-align: center;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .calendar-day:hover {
            background-color: var(--primary-light);
        }
        
        .calendar-day.today {
            background-color: var(--primary-color);
            color: var(--white);
            font-weight: bold;
        }
        
        .calendar-day.selected {
            background-color: var(--secondary-color);
            color: var(--white);
            font-weight: bold;
        }
        
        .calendar-day.disabled {
            color: var(--medium-gray);
            cursor: not-allowed;
        }
        
        /* Estilos para botones */
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: var(--primary-color);
            color: var(--white);
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.8rem;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-light);
        }
        
        /* Estilos para formularios */
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-control {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid var(--medium-gray);
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .checkbox-label {
            cursor: pointer;
        }
        
        /* Pie de página */
        .footer {
            background-color: var(--medium-gray);
            padding: 15px 20px;
            text-align: center;
            font-size: 12px;
            color: var(--dark-gray);
            border-top: 1px solid #d0d0d0;
        }
        
        /* Estilos para la sección de disponibilidad */
        .availability-section {
            margin-top: 20px;
        }
        
        .availability-info {
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .availability-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        
        .availability-table th, 
        .availability-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid var(--medium-gray);
        }
        
        .availability-table th {
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .status-bubbles {
            display: flex;
            gap: 5px;
        }
        
        .status-bubble {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        
        .not-available {
            font-weight: bold;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Barra de navegación principal -->
    <nav class="navbar">
        <div style="display: flex; align-items: center;">
            <div class="navbar-brand">OncoCheck</div>
            <div class="nav-links">
                <a href="#" class="nav-link active">Citas</a>
                <a href="#" class="nav-link">Disponibilidad</a>
                <a href="#" class="nav-link">Historial</a>
            </div>
        </div>
        <div class="user-icon" onclick="window.location.href='perfil.html'">
            <i class="fas fa-user"></i>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="main-content">
        <!-- Barra lateral -->
        <div class="sidebar">
            <h3 class="card-title">Citas</h3>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-file-medical"></i>
                        <span>Estudios</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-calendar-check"></i>
                        <span>Disponibilidad</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-history"></i>
                        <span>Historial de citas</span>
                    </a>
                </li>
            </ul>
            
            <div class="divider"></div>
            
            <h3 class="card-title">Lista guardada</h3>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-comment-alt"></i>
                        <span>Enviar comentarios</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Área de contenido principal -->
        <div class="content-area">
            <!-- Sección de disponibilidad de citas -->
            <div class="card">
                <div class="header-bar">
                    <h1>Disponibilidad de citas</h1>
                </div>
                
                <div class="schedule-container">
                    <div class="availability-info">
                        <p><strong>Tiempo para la cita:</strong> 1 hora</p>
                        <p><strong>Dirección de la clínica:</strong> Av. Salud No. 123, Ciudad Bienestar</p>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" id="repeat-weekly" checked>
                            <label for="repeat-weekly" class="checkbox-label">Repetir semanalmente</label>
                        </div>
                    </div>
                    
                    <table class="availability-table">
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Horario</th>
                                <th>Disponibilidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>09:00 - 17:00</td>
                                <td>
                                    <div class="status-bubbles">
                                        <span class="status-bubble">💬</span>
                                        <span class="status-bubble">💬</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>09:00 - 17:00</td>
                                <td>
                                    <div class="status-bubbles">
                                        <span class="status-bubble">💬</span>
                                        <span class="status-bubble">💬</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>09:00 - 17:00</td>
                                <td>
                                    <div class="status-bubbles">
                                        <span class="status-bubble">💬</span>
                                        <span class="status-bubble">💬</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>09:00 - 17:00</td>
                                <td>
                                    <div class="status-bubbles">
                                        <span class="status-bubble">💬</span>
                                        <span class="status-bubble">💬</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>09:00 - 17:00</td>
                                <td>
                                    <div class="status-bubbles">
                                        <span class="status-bubble">💬</span>
                                        <span class="status-bubble">💬</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td colspan="2" class="not-available">No disponible</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="form-group">
                        <button class="btn">Guardar cambios</button>
                        <button class="btn btn-outline">Cancelar</button>
                    </div>
                </div>
            </div>
            
            <!-- Sección de calendario -->
            <div class="card">
                <h2 class="card-title">Próximas citas</h2>
                
                <div class="calendar-nav">
                    <button class="btn btn-sm btn-outline"><i class="fas fa-chevron-left"></i></button>
                    <span class="calendar-title">Enero 2025</span>
                    <button class="btn btn-sm btn-outline"><i class="fas fa-chevron-right"></i></button>
                </div>
                
                <div class="calendar-grid">
                    <div class="calendar-header">LUN</div>
                    <div class="calendar-header">MAR</div>
                    <div class="calendar-header">MIÉ</div>
                    <div class="calendar-header">JUE</div>
                    <div class="calendar-header">VIE</div>
                    <div class="calendar-header">SÁB</div>
                    <div class="calendar-header">DOM</div>
                    
                    <!-- Días del mes -->
                    <div class="calendar-day disabled">30</div>
                    <div class="calendar-day">31</div>
                    <div class="calendar-day">1</div>
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
                    <div class="calendar-day">31</div>
                    <div class="calendar-day disabled">1</div>
                </div>
                
                <div class="form-group" style="margin-top: 20px;">
                    <label for="appointment-time" class="form-label">Hora de la cita:</label>
                    <select id="appointment-time" class="form-control">
                        <option value="09:00">09:00 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="13:00">01:00 PM</option>
                        <option value="14:00">02:00 PM</option>
                        <option value="15:00">03:00 PM</option>
                        <option value="16:00">04:00 PM</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button class="btn">Programar cita</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>Copyright © 2025 OncoCheck<br>Todos los derechos reservados.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selección de días en el calendario
            const calendarDays = document.querySelectorAll('.calendar-day:not(.disabled)');
            
            calendarDays.forEach(day => {
                day.addEventListener('click', function() {
                    // Remover selección previa
                    calendarDays.forEach(d => d.classList.remove('selected'));
                    // Seleccionar día clickeado
                    this.classList.add('selected');
                    
                    // Aquí podrías cargar las citas para este día
                    console.log('Día seleccionado:', this.textContent);
                });
            });
            
            // Marcar el día actual (ejemplo)
            const today = new Date();
            if (today.getMonth() === 0 && today.getFullYear() === 2025) { // Enero 2025
                const dayElements = document.querySelectorAll('.calendar-day');
                dayElements.forEach(day => {
                    if (day.textContent === today.getDate().toString()) {
                        day.classList.add('today');
                    }
                });
            }
            
            // Manejo del checkbox de repetición semanal
            const repeatWeekly = document.getElementById('repeat-weekly');
            repeatWeekly.addEventListener('change', function() {
                console.log('Repetición semanal:', this.checked ? 'activada' : 'desactivada');
                // Aquí podrías actualizar la UI o hacer una llamada API
            });
            
            // Manejo de los botones de navegación del calendario
            const prevMonthBtn = document.querySelector('.btn-outline:first-of-type');
            const nextMonthBtn = document.querySelector('.btn-outline:last-of-type');
            const calendarTitle = document.querySelector('.calendar-title');
            
            let currentMonth = 0; // Enero (0-indexado)
            let currentYear = 2025;
            
            prevMonthBtn.addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                updateCalendarTitle();
            });
            
            nextMonthBtn.addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                updateCalendarTitle();
            });
            
            function updateCalendarTitle() {
                const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                calendarTitle.textContent = `${monthNames[currentMonth]} ${currentYear}`;
                // Aquí deberías actualizar también los días del calendario
                console.log('Cambiando a:', calendarTitle.textContent);
            }
            
            // Manejo del botón de programar cita
            const scheduleBtn = document.querySelector('.content-area .btn:last-of-type');
            scheduleBtn.addEventListener('click', function() {
                const selectedDay = document.querySelector('.calendar-day.selected');
                const appointmentTime = document.getElementById('appointment-time').value;
                
                if (!selectedDay) {
                    alert('Por favor selecciona un día en el calendario');
                    return;
                }
                
                const appointmentDate = new Date(currentYear, currentMonth, parseInt(selectedDay.textContent));
                console.log('Cita programada para:', appointmentDate.toLocaleDateString(), 'a las', appointmentTime);
                alert(`Cita programada para el ${selectedDay.textContent} de ${calendarTitle.textContent} a las ${appointmentTime}`);
            });
        });
    </script>
</body>
</html>
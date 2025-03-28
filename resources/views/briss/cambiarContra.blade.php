<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoCheck - Cambiar Contraseña</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6a3093;
            --primary-light: #b58fd1;
            --primary-dark: #4a1d6b;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --white: #ffffff;
            --footer-gray: #f0f0f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-dark) 100%);
            padding: 40px 0 0;
        }
        
        .main-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            flex: 1;
        }
        
        .password-container {
            background-color: var(--white);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            min-height: 70vh;
            display: flex;
            overflow: hidden;
        }
        
        .password-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff; /* Cambiado de #f9f4fc a #ffffff */
    padding: 40px;
    border-radius: 16px 0 0 16px;
}
        
        .password-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .password-form {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin-left: auto;
            border-radius: 0 16px 16px 0;
        }
        
        .full-width-footer {
            width: 100%;
            background-color: var(--footer-gray);
            padding: 25px 0;
            margin-top: auto;
        }
        
        .footer-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #555;
        }
        
        .footer-copyright {
            text-align: left;
        }
        
        .footer-social {
            text-align: right;
            font-weight: 600;
        }
        
        .logo {
            width: 120px;
            margin-bottom: 30px;
            align-self: flex-end;
        }
        
        h1 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-weight: 600;
            text-align: center;
        }
        
        h2 {
            color: var(--text-color);
            font-size: 16px;
            margin-bottom: 30px;
            font-weight: 400;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-dark);
        }
        
        input {
            width: 100%;
            padding: 14px 16px 14px 40px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input:focus {
            border-color: var(--primary-light);
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 48, 147, 0.1);
        }
        
        .input-icon {
            position: absolute;
            left: 12px;
            top: 40px;
            color: var(--primary-light);
            font-size: 18px;
        }
        
        .toggle-password {
            position: absolute;
            right: 12px;
            top: 40px;
            color: var(--primary-light);
            cursor: pointer;
            font-size: 18px;
        }
        
        .toggle-password:hover {
            color: var(--primary-dark);
        }
        
        .options {
            margin: 25px 0;
            font-size: 14px;
        }
        
        .option-item {
            color: var(--primary-light);
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 5px;
            transition: color 0.3s;
        }
        
        .option-item:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .option-subitem {
            margin-left: 20px;
            color: #777;
            font-weight: normal;
            margin-top: 5px;
            font-size: 13px;
        }
        
        .btn-confirm {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin: 10px auto 0;
            display: block;
        }
        
        .btn-confirm:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        @media (max-width: 992px) {
            .password-container {
                flex-direction: column;
                min-height: auto;
            }
            .password-image {
                padding: 30px;
                border-radius: 16px 16px 0 0;
            }
            .password-form {
                padding: 40px;
                margin-left: 0;
                border-radius: 0 0 16px 16px;
            }
        }
        
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            .footer-copyright,
            .footer-social {
                text-align: center;
            }
            
            .btn-confirm {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="password-container">
            <div class="password-image">
                <img src="{{ asset('images/cambiarContra.jpg')}}" alt="Imagen descriptiva">
            </div>
            
            <div class="password-form">
                <img src="{{ asset('images/logo.png') }}" alt="OncoCheck Logo" class="logo">
                
                <h1>Cambiar contraseña</h1>
                <h2>Escriba su nueva contraseña</h2>
                
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="password">Nueva contraseña</label>
                        <i class="fas fa-lock input-icon" ></i>
                        <input type="password" id="password" name="password" placeholder="Ingrese su nueva contraseña" required>
                        <i class="fas fa-lock input-icon" onclick="togglePassword('password')"></i>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm-password">Confirmar contraseña</label>
                        <i></i>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme su nueva contraseña" required>
                        <i class="fas fa-eye toggle-password" onclick="togglePassword('confirm-password')"></i>
                    </div>

                    
                    
                    <button type="submit" class="btn-confirm">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
    
    <footer class="full-width-footer">
        <div class="footer-content">
            <div class="footer-copyright">
                Copyright © 2025 OncoCheck<br>
                Todos los derechos reservados.
            </div>
            <div class="footer-social">
                <strong>Nuestras redes</strong>
            </div>
        </div>
    </footer>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling;
            
            if (field.type === "password") {
                field.type = "text";
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = "password";
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>
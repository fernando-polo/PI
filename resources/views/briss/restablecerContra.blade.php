<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #9f56f9ce; /* Fondo morado claro */
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 500px;
            position: relative;
        }
        h1 {
            font-size: 1.8rem;
            margin-bottom: 1.2rem;
            color: #5a189a;
            text-align: center;
            font-weight: 600;
        }
        p {
            color: #666;
            margin-bottom: 1.8rem;
            font-size: 1rem;
            line-height: 1.5;
            text-align: center;
        }
        .divider {
            height: 1px;
            background-color: #f0f0f0;
            margin: 1.8rem auto;
            width: 80%;
        }
        .btn {
            background-color: #7b2cbf;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            width: 60%;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: block;
            margin: 1.5rem auto 0;
        }
        .btn:hover {
            background-color: #6a1b9a;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(123, 44, 191, 0.2);
        }
        .logo {
            width: 120px;
            position: absolute;
            left: 2.5rem;
            top: 2.5rem;
        }
        .email-container {
            position: relative;
            width: 80%;
            margin: 1.5rem auto 0;
        }
        .email-input {
            width: 100%;
            padding: 0.8rem 0.8rem 0.8rem 2.5rem;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 0.95rem;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }
        .email-input:focus {
            outline: none;
            border-color: #9c4dff;
            box-shadow: 0 0 0 3px rgba(156, 77, 255, 0.1);
        }
        .email-icon {
            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9c4dff;
            font-size: 1rem;
        }
        .form-content {
            margin-top: 4rem; /* Espacio para el logo */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('ruta/a/tu/imagen.png') }}" alt="Logo" class="logo">
        
        <div class="form-content">
            <h1>Restablecer contraseña</h1>
            <p>Ingresa tu correo electrónico y te enviaremos un código de verificación para restablecer tu contraseña.</p>
            
            <div class="email-container">
                <i class="fas fa-envelope email-icon"></i>
                <input type="email" class="email-input" placeholder="Correo electrónico" required>
            </div>
            
            <div class="divider"></div>
            
            <button type="submit" class="btn">Enviar código</button>
        </div>
    </div>
</body>
</html>
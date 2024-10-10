<?php
session_start();
/* Comprobamos si el usuario tiene sesión iniciada */
if (!isset($_SESSION['usuario']) && !is_array($_SESSION['usuario'])) {
    $_SESSION['alerta'] = [
        'clase' => 'alert-warning',
        'contenido' => 'Su sesión ha finalizado, inicie sesión nuevamente',
    ];
    header('Location: login.php');
    die();
}
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Deadmath</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="estilo.css">

    <!-- Estilo en línea para colores pastel -->
    <style>
        body {
            background-color: #f3f7f9; /* Fondo pastel suave */
            padding-top: 2rem;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #6c7ae0; /* Azul pastel */
            text-align: center;
        }

        h2.lead {
            color: #4b6587; /* Azul más oscuro */
            text-align: center;
        }

        h3 {
            color: #7f8c8d; /* Gris suave */
            text-align: center;
            font-weight: normal;
            margin-top: 10px;
        }

        p.small a {
            color: #ff6b81; /* Rosa pastel */
        }

        .container {
            background-color: #ffffff; /* Blanco limpio */
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        p.small a:hover {
            text-decoration: none;
            color: #ff4757; /* Efecto de hover rosa más fuerte */
        }

        /* Botón para cerrar sesión */
        .btn-logout {
            background-color: #ffa502; /* Naranja pastel */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 1rem;
            display: block;
            width: 100%;
            text-align: center;
        }

        .btn-logout:hover {
            background-color: #ff6348; /* Naranja más fuerte */
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>ULEAM ¡En Buenas Manos!</h1>
        <h2 class="lead">¡Bienvenido, <?= htmlspecialchars($_SESSION['usuario']['nombre']) ?>!</h2>
        
        <!-- Nueva sección con la descripción de inyección SQL -->
        <h3>Acceso correcto</h3>
        

        <button class="btn-logout" onclick="window.location.href='logout.php'">Cerrar sesión</button>
    </div>
</body>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
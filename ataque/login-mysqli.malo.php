<?php
require_once 'config.php';
session_start();

// Verificar que se enviaron los campos requeridos
if (empty($_POST['usuario']) || empty($_POST['contraseña'])) {
    $_SESSION['alerta'] = [
        'clase' => 'alert-warning',
        'contenido' => 'Introduzca nombre de usuario y contraseña',
    ];
    header('Location: login.php');
    die();
}

// Establecer la conexión a la base de datos
$conexión = @new \mysqli(
    $mysql['host'],
    $mysql['usuario'],
    $mysql['contraseña'],
    $mysql['basededatos']
);

// Verificar la conexión
if ($conexión->connect_error) {
    die("ERROR DE CONEXIÓN: " . $conexión->connect_error);
}

// Establecer el juego de caracteres
if ($conexión->set_charset('utf8') === false) {
    die("ERROR JUEGO DE CARACTERES: " . $conexión->error);
}

// Precargar las variables del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consulta preparada para buscar el usuario y la contraseña
$consulta = $conexión->prepare("SELECT * FROM accounts WHERE username = ? AND password = ?");
if (!$consulta) {
    die("Error en la preparación de la consulta: " . $conexión->error);
}

// Vincular parámetros
$consulta->bind_param("ss", $usuario, $contraseña);
$consulta->execute();

// Obtener resultados
$resultado = $consulta->get_result();
$datos = $resultado->fetch_assoc();

// Comprobar si se encontró el usuario y la contraseña
if ($datos === NULL) {
    $_SESSION['alerta'] = [
        'clase' => 'alert-danger',
        'contenido' => 'Usuario o contraseña incorrecta',
    ];
    header('Location: login.php');
    die();
}

// Guardar datos del usuario en la sesión
$_SESSION['usuario'] = $datos;

// Redirigir a la aplicación
header('Location: aplicacion.php');

// Cerrar la consulta
$consulta->close();


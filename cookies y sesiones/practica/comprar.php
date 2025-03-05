<?php
session_start();

// Verificar si la cookie está activa
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Vaciar solo los datos de la sesión sin eliminar la cookie
session_unset();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Realizada</title>
</head>
<body>
    <h1>Has finalizado tu compra</h1>
    <h2>Esperamos verte de nuevo!</h2>
    <a href="logout.php">Salir</a>
</body>
</html>

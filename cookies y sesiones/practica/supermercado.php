<?php
// Iniciamos la sesión para acceder a los datos almacenados en $_SESSION
session_start();

// Verificamos si la cookie y la sesión del usuario están activas
// Si no están definidas, redirigimos al usuario a la página de inicio de sesión
if(!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php"); // Redirección al login
    exit();
}

// Extraemos el nombre de usuario de la sesión activa
$usuario = $_SESSION["usuario_sesion"]["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h1>

    <h2>Nuestros productos</h2>
    
    <b>Principales</b>
    <a href="principales.php">Ver platos principales</a>
    <br><br>

    <b>Postres</b>
    <a href="postres.php">Ver postres</a>
    <br><br>

    <b>Bebidas</b>
    <a href="bebidas.php">Ver bebidas</a>
    <br><br>

    <b>Favoritos</b>
    <a href="favoritos.php">Ver productos favoritos</a>
    <br><br>

    <!-- Enlace para cerrar sesión -->
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>

<?php
session_start();

// Verificar si la cookie está activa
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Si se presiona el botón "Comprar", vaciar las variables de sesión de los platos
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["comprar"])) {
    session_unset(); // Vaciar todas las variables de sesión
    header("Location: supermercado.php"); // Redirigir después de la compra
    exit();
}

// Si se presiona el botón "Eliminar", quitar el elemento de la sesión
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["eliminar"]) && isset($_GET["categoria"])) {
    $categoria = $_GET["categoria"];
    $item = $_GET["eliminar"];
    
    if (isset($_SESSION[$categoria][$item])) {
        unset($_SESSION[$categoria][$item]);
    }
    header("Location: carrito.php");
    exit();
}

function generarLista($categoria) {
    if (isset($_SESSION[$categoria]) && count($_SESSION[$categoria]) > 0) {
        foreach ($_SESSION[$categoria] as $producto => $cantidad) {
            echo "<li>$producto : $cantidad <a href='?eliminar=$producto&categoria=$categoria'>Eliminar</a></li>";
        }
    } else {
        echo "<li>Aún no has seleccionado nada</li>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
</head>
<body>
    <h1>Resumen del Pedido</h1>
    
    <h2>Platos principales</h2>
    <ul><?php generarLista('principales'); ?></ul>
    
    <h2>Postres</h2>
    <ul><?php generarLista('postres'); ?></ul>
    
    <h2>Bebidas</h2>
    <ul><?php generarLista('bebidas'); ?></ul>

    <form action="carrito.php" method="GET">
        <input type="submit" name="comprar" value="Comprar">
    </form>

    <br><br>
    <a href="postres.php">Postres</a> ||
    <a href="bebidas.php">Bebidas</a> ||
    <a href="principales.php">Principales</a> ||
    <a href="favoritos.php"></a> ||
    <a href="logout.php">Salir</a>

</body>
</html>
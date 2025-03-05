<?php
session_start();

// Verificar si la cookie está activa
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Procesar selección de bebidas
if (isset($_GET['bebidas']) && is_array($_GET['bebidas'])) {
    $_SESSION['bebidas'] = array_merge($_SESSION['bebidas'] ?? [], array_filter($_GET['bebidas'], function($cantidad) {
        return $cantidad > 0;
    })); // Mantiene los valores previos y agrega los nuevos
    header("Location: carrito.php");
    exit();
}

// Procesar eliminación parcial
if (isset($_POST['eliminar']) && isset($_POST['cantidad']) && isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];
    $item = $_POST['eliminar'];
    $cantidad_a_restar = (int)$_POST['cantidad'];
    
    if (isset($_SESSION[$categoria][$item])) {
        $_SESSION[$categoria][$item] -= $cantidad_a_restar;
        if ($_SESSION[$categoria][$item] <= 0) {
            unset($_SESSION[$categoria][$item]); // Eliminar si la cantidad llega a 0
        }
    }
    header("Location: carrito.php");
    exit();
}

// Recuperar valores de sesión o establecer mensaje por defecto
$principales = isset($_SESSION['principales']) ? $_SESSION['principales'] : [];
$postres = isset($_SESSION['postres']) ? $_SESSION['postres'] : [];
$bebidas = isset($_SESSION['bebidas']) ? $_SESSION['bebidas'] : [];

function mostrarResumen($categoria, $titulo) {
    echo "<h3>$titulo</h3>";
    if (!empty($_SESSION[$categoria])) {
        echo "<ul>";
        foreach ($_SESSION[$categoria] as $item => $cantidad) {
            echo "<li>$item: $cantidad ";
            echo "<form method='POST' style='display:inline;'>";
            echo "<input type='hidden' name='eliminar' value='$item'>";
            echo "<input type='hidden' name='categoria' value='$categoria'>";
            echo "<input type='number' name='cantidad' min='1' max='$cantidad' value='1'>";
            echo "<button type='submit'>Eliminar</button>";
            echo "</form>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aún no has seleccionado nada</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    
    <?php
    mostrarResumen('principales', 'Platos Principales');
    mostrarResumen('postres', 'Postres');
    mostrarResumen('bebidas', 'Bebidas');
    ?>

    <br>
    <form action="comprar.php" method="post">
        <button type="submit">Finalizar Compra</button>
    </form>

    
    <br><br>
    <a href="supermercado.php">Inicio</a> ||
    <a href="principales.php">Principales</a> ||
    <a href="postres.php">Postres</a> ||
    <a href="bebidas.php">Bebidas</a> ||
    <a href="favoritos.php">Ver favoritos</a> ||
    <a href="logout.php">Salir</a>
</body>
</html>

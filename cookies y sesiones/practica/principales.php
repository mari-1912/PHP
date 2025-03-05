<?php
session_start();

// Verificar si la cookie está activa
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Procesar selección de platos principales
if (isset($_GET['principales']) && is_array($_GET['principales'])) {
    $_SESSION['principales'] = array_filter($_GET['principales'], function($cantidad) {
        return $cantidad > 0;
    }); // Guarda solo los platos con cantidad mayor a 0
    header("Location: postres.php");
    exit();
}

// Procesar selección de postres
if (isset($_GET['postres']) && is_array($_GET['postres'])) {
    $_SESSION['postres'] = $_GET['postres'];
    header("Location: bebidas.php");
    exit();
}

// Procesar selección de bebidas
if (isset($_GET['bebidas']) && is_array($_GET['bebidas'])) {
    $_SESSION['bebidas'] = $_GET['bebidas'];
    header("Location: carrito.php");
    exit();
}

// Recuperar valores de sesión o establecer mensaje por defecto
$principales = isset($_SESSION['principales']) ? implode(", ", array_map(function($plato, $cantidad) {
    return "$plato : $cantidad";
}, array_keys($_SESSION['principales']), $_SESSION['principales'])) : "Aún no has seleccionado nada";

$postres = isset($_SESSION['postres']) ? implode(", ", $_SESSION['postres']) : "Aún no has seleccionado nada";
$bebidas = isset($_SESSION['bebidas']) ? implode(", ", $_SESSION['bebidas']) : "Aún no has seleccionado nada";

$platos_principales = ['Gazpacho', 'Cocido Madrileño', 'Tortilla francesa', 'Revuelto de setas', 'Escalope con patatas'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principales</title>
</head>
<body>
    <h1>Platos principales</h1>
    
    <form action="" method="GET">
        <label for="principal">Selecciona los platos principales: </label>
        <ul>
            <?php foreach($platos_principales as $plato): ?>
                <li>
                    <label><?php echo $plato; ?></label>
                    <input type="number" name="principales[<?php echo $plato; ?>]" value="0" min="0">
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="submit" value="Añadir">
    </form>
    
    <br><br>
    <a href="postres.php">Postres</a> ||
    <a href="bebidas.php">Bebidas</a> ||
    <a href="carrito.php">Ver Carrito</a> ||
    <a href="logout.php">Salir</a> ||
    <a href="favoritos.php"></a>
    
    <h2>Resumen de selección:</h2>
    <p><strong>Platos principales:</strong> <?php echo $principales; ?></p>
    <p><strong>Postres:</strong> <?php echo $postres; ?></p>
    <p><strong>Bebidas:</strong> <?php echo $bebidas; ?></p>
</body>
</html>

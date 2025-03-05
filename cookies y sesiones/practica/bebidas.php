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
    $_SESSION['bebidas'] = array_filter($_GET['bebidas'], function($cantidad) {
        return $cantidad > 0;
    }); // Guarda solo las bebidas con cantidad mayor a 0
    header("Location: carrito.php");
    exit();
}

// Recuperar valores de sesión o establecer mensaje por defecto
$principales = isset($_SESSION['principales']) ? implode(", ", array_map(function($plato, $cantidad) {
    return "$plato : $cantidad";
}, array_keys($_SESSION['principales']), $_SESSION['principales'])) : "Aún no has seleccionado nada";

$postres = isset($_SESSION['postres']) ? implode(", ", array_map(function($postre, $cantidad) {
    return "$postre : $cantidad";
}, array_keys($_SESSION['postres']), $_SESSION['postres'])) : "Aún no has seleccionado nada";

$bebidas = isset($_SESSION['bebidas']) ? implode(", ", array_map(function($bebida, $cantidad) {
    return "$bebida : $cantidad";
}, array_keys($_SESSION['bebidas']), $_SESSION['bebidas'])) : "Aún no has seleccionado nada";

$platos_bebidas = ['Coca Cola', 'Nestea', 'Vino', 'Cerveza', 'Botella de agua'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
</head>
<body>
    <h1>Bebidas</h1>
    
    <form action="" method="GET">
        <label for="bebidas">Selecciona las bebidas: </label>
        <ul>
            <?php foreach($platos_bebidas as $bebida): ?>
                <li>
                    <label><?php echo $bebida; ?></label>
                    <input type="number" name="bebidas[<?php echo $bebida; ?>]" value="0" min="0">
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="submit" value="Añadir">
    </form>

    <br><br>
    <a href="postres.php">Postres</a> ||
    <a href="principales.php">Principales</a> ||
    <a href="carrito.php">Ver Carrito</a> ||
    <a href="logout.php">Salir</a> ||
    <a href="favoritos.php"></a>
    
    <h2>Resumen de selección:</h2>
    <p><strong>Platos principales:</strong> <?php echo $principales; ?></p>
    <p><strong>Postres:</strong> <?php echo $postres; ?></p>
    <p><strong>Bebidas:</strong> <?php echo $bebidas; ?></p>
</body>
</html>

<?php
session_start();

// Verificar si la cookie está activa y la sesión existe
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Procesar la selección de postres
if (isset($_GET['postres']) && is_array($_GET['postres'])) {
    $_SESSION['postres'] = array_merge($_SESSION['postres'] ?? [], array_filter($_GET['postres'], function($cantidad) {
        return $cantidad > 0;
    })); // Mantiene los valores previos y agrega los nuevos
    header("Location: bebidas.php");
    exit();
}

// Recuperar valores de sesión o establecer mensaje por defecto
$principales = "Aún no has seleccionado nada";
if (isset($_SESSION['principales']) && count($_SESSION['principales']) > 0) {
    $principales = "";
    foreach ($_SESSION['principales'] as $plato => $cantidad) {
        $principales .= "$plato : $cantidad, ";
    }
    $principales = rtrim($principales, ", "); // Eliminar la última coma
}

$postres = "Aún no has seleccionado nada";
if (isset($_SESSION['postres']) && count($_SESSION['postres']) > 0) {
    $postres = "";
    foreach ($_SESSION['postres'] as $postre => $cantidad) {
        $postres .= "$postre : $cantidad, ";
    }
    $postres = rtrim($postres, ", ");
}

$bebidas = "Aún no has seleccionado nada";
if (isset($_SESSION['bebidas']) && count($_SESSION['bebidas']) > 0) {
    $bebidas = "";
    foreach ($_SESSION['bebidas'] as $bebida => $cantidad) {
        $bebidas .= "$bebida : $cantidad, ";
    }
    $bebidas = rtrim($bebidas, ", ");
}

// Lista de postres disponibles
$lista_postres = ['Tarta de queso', 'Flan', 'Helado', 'Fruta', 'Natillas'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postres</title>
</head>
<body>
    <h1>Postres</h1>
    
    <form action="" method="GET">
        <label for="postres">Selecciona los postres: </label>
        <ul>
            <?php foreach($lista_postres as $postre): ?>
                <li>
                    <label><?php echo $postre; ?></label>
                    <input type="number" name="postres[<?php echo $postre; ?>]" value="<?php echo $_SESSION['postres'][$postre] ?? 0; ?>" min="0">
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="submit" value="Añadir">
    </form>
    
    <br><br>
    <a href="supermercado.php">Inicio</a> ||
    <a href="principales.php">Principales</a> ||
    <a href="bebidas.php">Bebidas</a> ||
    <a href="carrito.php">Ver Carrito</a> ||
    <a href="favoritos.php">Ver favoritos</a> ||
    <a href="logout.php">Salir</a>
    
    <h2>Resumen de selección:</h2>
    <p><strong>Platos principales:</strong> <?php echo $principales; ?></p>
    <p><strong>Postres:</strong> <?php echo $postres; ?></p>
    <p><strong>Bebidas:</strong> <?php echo $bebidas; ?></p>
</body>
</html>

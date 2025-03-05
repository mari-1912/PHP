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

// Recuperar valores de sesión o establecer mensaje por defecto
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

$lista_bebidas = ['Agua', 'Coca-Cola', 'Jugo de naranja', 'Vino', 'Cerveza'];

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
            <?php foreach($lista_bebidas as $bebida): ?>
                <li>
                    <label><?php echo $bebida; ?></label>
                    <input type="number" name="bebidas[<?php echo $bebida; ?>]" value="<?php echo $_SESSION['bebidas'][$bebida] ?? 0; ?>" min="0">
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="submit" value="Añadir">
    </form>
    
    <br><br>
    <a href="supermercado.php">Inicio</a> ||
    <a href="principales.php">Principales</a> ||
    <a href="postres.php">Postres</a> ||
    <a href="carrito.php">Ver Carrito</a> ||
    <a href="favoritos.php">Ver favoritos</a> ||
    <a href="logout.php">Salir</a>
    
    <h2>Resumen de selección:</h2>
    <p><strong>Platos principales:</strong> <?php echo $principales; ?></p>
    <p><strong>Postres:</strong> <?php echo $postres; ?></p>
    <p><strong>Bebidas:</strong> <?php echo $bebidas; ?></p>
</body>
</html>

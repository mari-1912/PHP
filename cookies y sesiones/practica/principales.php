<?php
// Iniciamos la sesión para acceder a las variables de $_SESSION
session_start();

// Verificamos si la cookie y la sesión están activas, si no, redirigimos al login
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

// Extraemos el nombre de usuario de la sesión
$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Procesar la selección de platos principales
if (isset($_GET['principales']) && is_array($_GET['principales'])) {
    // Filtramos los valores para asegurarnos de que sean mayores que 0 antes de agregarlos
    $_SESSION['principales'] = array_merge($_SESSION['principales'] ?? [], array_filter($_GET['principales'], function($cantidad) {
        return $cantidad > 0;
    })); 

    // Redirigimos a la siguiente página del flujo de compra (postres)
    header("Location: postres.php");
    exit();
}

// Recuperamos los valores almacenados en la sesión o mostramos un mensaje por defecto si aún no se han seleccionado
$principales = "Aún no has seleccionado nada";
if (isset($_SESSION['principales']) && count($_SESSION['principales']) > 0) {
    $principales = ""; // Inicializamos la variable como cadena vacía
    foreach ($_SESSION['principales'] as $plato => $cantidad) {
        $principales .= "$plato : $cantidad, ";
    }
    $principales = rtrim($principales, ", "); // Eliminamos la última coma
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

// Lista de platos principales disponibles
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
            <?php foreach($platos_principales as $plato) { ?>
                <li>
                    <label><?php echo htmlspecialchars($plato); ?></label>
                    <input type="number" name="principales[<?php echo htmlspecialchars($plato); ?>]" value="<?php echo $_SESSION['principales'][$plato] ?? 0; ?>" min="0">
                </li>
            <?php }; ?>
        </ul>
        <input type="submit" value="Añadir">
    </form>
    
    <br><br>
    <a href="supermercado.php">Inicio</a> ||
    <a href="postres.php">Postres</a> ||
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

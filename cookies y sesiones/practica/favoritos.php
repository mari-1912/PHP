<?php
session_start();

// Verificar si la cookie está activa
if (!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

// Listas de opciones disponibles
$platos_principales = ['Gazpacho', 'Cocido Madrileño', 'Tortilla francesa', 'Revuelto de setas', 'Escalope con patatas'];
$platos_postres = ['Brownie con helado', 'Tarta de queso al horno', 'Natillas', 'Tarta de la casa', 'Fruta de temporada'];
$platos_bebidas = ['Coca Cola', 'Nestea', 'Vino', 'Cerveza', 'Botella de agua'];

// Manejo de platos favoritos
if (isset($_GET['favoritos']) && is_array($_GET['favoritos'])) {
    $_SESSION['favoritos'] = $_GET['favoritos'];
}

// Recuperar platos favoritos de la sesión
$favoritos = isset($_SESSION['favoritos']) ? implode(", ", $_SESSION['favoritos']) : "Aún no has seleccionado nada";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos Favoritos</title>
</head>
<body>
    <h1>Selecciona tus Platos Favoritos</h1>
    
    <form action="" method="GET">
        <h2>Platos Principales</h2>
        <ul>
            <?php foreach($platos_principales as $plato): ?>
                <li>
                    <label>
                        <input type="checkbox" name="favoritos[]" value="<?php echo $plato; ?>" 
                            <?php echo (isset($_SESSION['favoritos']) && in_array($plato, $_SESSION['favoritos'])) ? 'checked' : ''; ?>>
                        <?php echo $plato; ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h2>Postres</h2>
        <ul>
            <?php foreach($platos_postres as $postre): ?>
                <li>
                    <label>
                        <input type="checkbox" name="favoritos[]" value="<?php echo $postre; ?>" 
                            <?php echo (isset($_SESSION['favoritos']) && in_array($postre, $_SESSION['favoritos'])) ? 'checked' : ''; ?>>
                        <?php echo $postre; ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h2>Bebidas</h2>
        <ul>
            <?php foreach($platos_bebidas as $bebida): ?>
                <li>
                    <label>
                        <input type="checkbox" name="favoritos[]" value="<?php echo $bebida; ?>" 
                            <?php echo (isset($_SESSION['favoritos']) && in_array($bebida, $_SESSION['favoritos'])) ? 'checked' : ''; ?>>
                        <?php echo $bebida; ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <input type="submit" value="Guardar Favoritos">
    </form>
    
    <h2>Tus Platos Favoritos:</h2>
    <p><?php echo $favoritos; ?></p>
    
    <a href="principales.php">Volver a Platos Principales</a> ||
    <a href="postres.php">Postres</a> ||
    <a href="bebidas.php">Bebidas</a> ||
    <a href="carrito.php">Ver Carrito</a> ||
    <a href="logout.php">Salir</a>
</body>
</html>

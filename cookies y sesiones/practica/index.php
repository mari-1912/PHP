<?php
// Iniciamos la sesión para manejar la autenticación del usuario
session_start();

// Definimos un array de usuarios registrados con sus contraseñas
$usuarios_registrados = [
    'admin' => 'admin',
    'pilar' => '1234',
    'alumno' => '1234'
];

// Si ya existe una cookie de usuario y una sesión activa, redirigimos directamente al supermercado
if(isset($_COOKIE['usuario_cookie']) && isset($_SESSION["usuario_sesion"])){
    header('Location: supermercado.php'); // Redirección a la página principal del supermercado
    exit();
}

// Verificamos si la solicitud es de tipo POST (envío de formulario de login)
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los datos del formulario y evitamos valores nulos asignando una cadena vacía por defecto
    $usuario = $_POST["usuario"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
    
    // Validamos si el usuario existe en la lista de registrados y la contraseña es correcta
    if(isset($usuarios_registrados[$usuario]) && $usuarios_registrados[$usuario] === $contrasena) {
        
        // Creamos una cookie para recordar al usuario por una semana (604800 segundos)
        setcookie("usuario_cookie", $usuario, time() + 604800, "/");
        
        // Guardamos la sesión del usuario con información adicional (parece que estas variables no están definidas)
        $_SESSION["usuario_sesion"] = [
            "usuario" => $usuario,
            "favoritos" => $favoritos,    // ⚠️ Estas variables no están definidas en el código
            "principales" => $principales, // ⚠️ Esto podría generar un error
            "postres" => $postres,         // ⚠️ Asegurar que están definidas antes de usarlas
            "bebidas" => $bebidas
        ]; 
        
        // Redirigimos al usuario a la página del supermercado tras el login exitoso
        header("Location: supermercado.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, almacenamos un mensaje de error
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Inicio de sesión: </h2>
    
    <!-- Formulario de login -->
    <form action="" method="POST">
        Usuario: <input type="text" name="usuario" placeholder="usuario" required>
        Contraseña: <input type="password" name="contrasena" placeholder="contraseña" required>
        <button type="submit">Ingresar</button>
    </form>    
    
    <!-- Mostramos un mensaje de error si las credenciales son incorrectas -->
    <?php if(isset($error)) { ?>
        <p style='color:red'><?php echo $error ?></p>
    <?php } ?>
</body>
</html>

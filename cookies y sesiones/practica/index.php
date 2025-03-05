<?php
session_start();

$usuarios_registrados = [
    'admin' => 'admin',
    'pilar' => '1234',
    'alumno' => '1234'
];

//si la cookie esta registrada nos lleva directamente al inicio del supermercado
if(isset($_COOKIE['usuario_cookie']) && isset($_SESSION["usuario_sesion"])){
    header('Location: supermercado.php');
    exit();
}

//codigo de login
if($_SERVER["REQUEST_METHOD"]=="POST") {
    //si el metodo de recogida de datos del form del login es post
    //recogemos usuario y contraseña en dos variables, 
    // y si son null lo ponemos como string vacio
    $usuario = $_POST["usuario"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
    
    //validamos que el usuario introducido está entre los usuarios predefinidos como registrados
    if(isset($usuarios_registrados[$usuario]) && $usuarios_registrados[$usuario] === $contrasena) {
        
        //creamos la cookie con validez de una semana
        setcookie("usuario_cookie", $usuario, time() + 604800, "/");
        
        //guardamos la sesion de ese usuario
        $_SESSION["usuario_sesion"] = [
            "usuario" => $usuario, //aqui poner platos, favoritos
            "favoritos" => $favoritos,
            "principales" => $principales,
            "postres" => $postres,
            "bebidas" => $bebidas
        ]; 
        
        //nos lleva al supermercado
        header(header: "Location: supermercado.php");
        exit();

    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Inicio de sesión: </h2>
    <form action="" method="POST">
        Usuario: <input type="text" name="usuario" placeholder="usuario" required>
        Contraseña: <input type="password" name="contrasena" placeholder="contraseña" required>
        <button type="submit">Ingresar</button>
    </form>    
    <?php if(isset($error)) { ?> <!--imprimimos el error de usuario incorrecto-->
        <p style='color:red'><?php echo $error ?></p>
    <?php } ?>
</body>
</html>
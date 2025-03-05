<?php
session_start();

if(!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

session_destroy(); //eliminamos la sesion y con ello todos los datos de esa sesion

setcookie("usuario_cookie", "", time() -604800, "/"); //borramos la cookie
//volvemos a redirigir al login
header("Location: index.php");
exit();
?>
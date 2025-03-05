<?php
session_start();

//verificar si la cookie esta activa
if(!isset($_COOKIE["usuario_cookie"]) || !isset($_SESSION["usuario_sesion"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["usuario_sesion"]["usuario"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
</head>
<body>
    <a href="logout.php">Cerrar Sesión</a>
    <h1>Nuestros productos</h1>
    <h2></h2>
    <b>Principales</b>
    <a href="principales.php">ver platos principales</a>
    <br><br>
    <b>Postres</b>
    <a href="postres.php">ver postres</a>
    <br><br>
    <b>Bebidas</b>
    <a href="bebidas.php">ver bebidas</a>
    <br><br>
    <b>Favoritos</b>
    <a href="favoritos.php">Ver productos favoritos</a>
</body>
</html>
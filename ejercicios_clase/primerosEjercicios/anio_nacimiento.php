<?php

$anio_actual = 2025; //declaramos el año actual
$anio_nacimiento=$_GET['nacimiento']; //parametro GET para que reoja el año que introduzca el usuario en el form

    if ($anio_nacimiento <= $anio_actual) { //si el año de nacimiento es menor que el año actual ejecuta el if
        $edad = $anio_actual - $anio_nacimiento; //calculamos la edad restando el año actual - el año de nacimiento
        echo "Tienes $edad años"; //resultado que muestra por pantalla al cliente si hemos introducido un año correcto
    } else {
        ?>
        <p><label>Año incorrecto</label><br>Incorrecto</p>
        <?php
    }
?>

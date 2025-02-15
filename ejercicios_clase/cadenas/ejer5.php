<?php
/*Dada una cadena y una letra/número  encontrar la primera ocurrencia de esa 
letra/número.*/
    $cadena="hola, buenos dias";
    $letra="a";
 function encontrarPrimeraOcurrencia($cadena, $letra) {
    $posicion = strpos($cadena, $letra);
    if ($posicion !== false) {
        return $posicion;
    } else {
        return -1;
    }
 }
?>
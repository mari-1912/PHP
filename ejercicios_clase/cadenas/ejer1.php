<?php
/*Dadas dos cadenas compararlas carácter a carácter y decir cuántos caracteres son iguales, 
es decir son el mismo carácter en la misma posición distinguiendo mayúsculas y 
minúsculas. */

 $cadena1 = "Hola Buenos Diaslllllllllllllllllllllll";
 $cadena2 = "hola buenos dias";
 $cadena1 = strtolower($cadena1);
 $cadena2 = strtolower($cadena2);
 $cont = 0;
 for ($i = 0; $i < strlen($cadena1); $i++) {
    if ($cadena1[$i] == $cadena2[$i]) {
        $cont++;
    } else if ($cadena1 > $cadena2 || $cadena2 > $cadena1) {
        echo "Las cadenas son diferentes";
    }  
 }
echo "La cadena $cadena1 tiene $cont caracteres iguales a la cadena $cadena2.";


?>

//MAL CORREGIR 
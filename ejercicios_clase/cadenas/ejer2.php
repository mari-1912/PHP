<?php
/*Dadas dos cadenas concatenar los “n” (siendo n un número entre 0 y la longitud de la 
cadena) primeros caracteres de la primera con los “n” últimos caracteres de la segunda.*/
function concatenar_cadenas($cadena1, $cadena2, $n) {
    if ($n > strlen($cadena1)) {
        $n = strlen($cadena1);
    }
    if ($n > strlen($cadena2)) {
        $n = strlen($cadena2);
    }
    return substr($cadena1, 0, $n) . substr($cadena2, - $n);
}
            
echo concatenar_cadenas("abcdefgh","ijklmnopq",6);

?>
<?php
/*Dada una cadena eliminar las vocales y ordenar las consonantes existentes 
alfabéticamente. */

function eliminarVocales($cadena) {
    $consonantes = array_filter(str_split($cadena), function($letra) {
        return ctype_alpha($letra) && !in_array(strtolower($letra), ['a',
        'e', 'i', 'o', 'u']);
    });
    sort($consonantes);
    return implode('', $consonantes);
}
$cadena = "Hola mundo";
echo eliminarVocales($cadena);

?>
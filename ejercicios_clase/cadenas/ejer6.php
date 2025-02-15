<?php
/*Dada una cadena eliminar todos los espacios en blanco que contenga y reemplazar las 
vocales por “*”. */

$frase = "Hola soy un ejemplo de frase con espacios en blanco";
$frase = str_replace(" ", "", $frase);

$fraseArray = str_split($frase);
for ($i = 0; $i < count($fraseArray); $i++) {
    switch (strtolower($fraseArray[$i])) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            $fraseArray[$i] = '*';
            break;
    }
}

$frase = implode('', $fraseArray);
echo $frase;

?>

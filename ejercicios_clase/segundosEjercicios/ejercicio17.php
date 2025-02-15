<?php
/*
8. Define un array de números desordenados, un límite. El script creará un array 
ordenado que contenga solo los elementos del array original menores que el lí-
mite y lo imprimirá por pantalla. NO VALE UTILIZAR LA FUNCIÓN PARA 
ORDENAR ARRAYS, DEBES ORDENARLOS MEDIANTE TU PROPIO 
ALGORITMO.*/

$array = array(5, 2, 8, 1, 9, 3, 7, 4, 6);
$limite = $_GET['num'];

$arrayMenores = array();
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $limite) {
        $arrayMenores[] = $array[$i];
    }
}

sort($arrayMenores);

echo (print_r($arrayMenores));

?>
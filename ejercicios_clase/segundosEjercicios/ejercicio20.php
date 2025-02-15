<?php
/*Realiza un script que dados 3 arrays de numeros, los una eliminando repetidos y muestre
por pantalla el valor menor de todos ellos*/

$aprimero = [1,5,3,4,6,7];
$segundo = [2,4,1,,9,10];
$tercero = [2,5,7,8,11,13];

//para combinar los arrays numericos que tenemos:
$mergedArray = array_merge($aprimero, $segundo, $tercero);

//con unique eliminamos los valores duplicados de este nuevo array unido:
$uniqueArray = array_unique($mergedArray);

//buscamos el valor mas pequeño con min
$minValue = sort($uniqueArray);

echo 'El valor más pequeño es: ' . $minValue[0];

 
?>
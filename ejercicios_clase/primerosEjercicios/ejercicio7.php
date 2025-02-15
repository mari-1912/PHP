<!--7.	Realizar un programa que dado un array de números, sume el valor de todos los números de array y lo muestre.
o	Crear un formulario que únicamente tenga un botón “submit” para 
“Crear array y sumar contenido” y mostrará el contenido de todos los elementos de un array y la suma de todos ellos. (podéis usar print_r()).
-->

<?php

$suma = 0;
$mi_array = array (1,5,7,6,10); //declaramos array de numeros
print_r($mi_array); //para mostrar el array por pantalla
$suma = array_sum($mi_array); //sumamos todos los elementos del array
echo $suma; //devolvemos la suma por pantalla

?>
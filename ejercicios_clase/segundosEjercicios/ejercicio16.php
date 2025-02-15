<?php
/*7. Utilizando una estructura “for” calcular el promedio de los “n” primeros núme-
ros. Es decir: sí n=4, calculará la media de 1+2+3+4. Sí n=7 calculará la media 
de 1+2+3+4+5+6+7 y lo muestra por pantalla.*/

$array = array(1,2,3,4,5,6,7,8,9,10);
$num = $_GET['num'];
$suma = 0;

$longitud = count(array);

if ($longitud < $num) {
    $num = $longitud;
}

for ($i = 1; $i <= $num; $i++) {
    $suma += $array[$i-1];
}
    $promedio = $suma / $num;
    echo $promedio;

?>
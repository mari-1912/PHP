<!--3.	Tenemos un array asociativo de nombres de alumnos => año de nacimiento. 
Ordenarlos alfabéticamente por nombre de alumno y mostrarlos.
ordenarlos tambien por valor -->

<?php

$alumnos = array(
    'Pilar' => 2000,
    'Juan' => 1998,
    'Ana' => 2001,
    'Luis' => 2004
);

//ordenar albeticamente
ksort($alumnos);
echo 'Con los nombres ordenados alfabéticamente:';
echo '<br>';
print_r($alumnos);

echo '<br><br>';

//ordenar segun los valores en orden ascendente
asort($alumnos);
echo 'Con 0los nombres ordenados según año de nacimiento:';
echo '<br>';
print_r($alumnos);

?>
<!--8.	Dado un array de palabras decir cuantas palabras tienen la vocal “a”.-->

<?php
$palabras = array('hola','este','es','un','ejercicio','de','arrays','para','clase');
$copia_palabras = 0;

foreach ($palabras as $palabra) { //usamos foreach para recorrer las palabras en el array
    if (strpos($palabra, 'a') !== false) { //si la palabra contiene la vocal 'a'
        $copia_palabras++; //entonces la sumamos a la copia de la variable palabras
    }
}

echo "Hay $copia_palabras palabras que contienen la vocal 'a'.";

?>


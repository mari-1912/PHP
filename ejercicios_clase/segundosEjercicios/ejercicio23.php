<?php
/*23.	Realizar un script que dado un array de números y un número
o	Elimine del array todos los números mayores que número y muestre los eliminados.
o	Elimine del array todos los 5 números mayores que número y muestre los eliminados.
o	Elimine del array todos los números menores que número y muestre los eliminados.
o	Sustituya los 5 elementos mayores de un array por los 5 elementos de otro array.
*/
$arrayNumeros = [10, 45, 22, 67, 89, 34, 23, 90, 56, 78, 12, 3, 95];
$numeroReferencia = 50;
function ejerciciosArray($array, $numero, $arrayCopia) {
    $ordenarArray = $array;
    sort($ordenarArray);
    
    // 1. Eliminar todos los números mayores que $numero
    $eliminadosMayores = array_filter($array, function($n) use ($numero) {
        return $n > $numero;
    });
    $array = array_diff($array, $eliminadosMayores);
    echo "Números eliminados (mayores que $numero): ", implode(", ", $eliminadosMayores), "\n"; //implode une el array en cadena de texto usando ',' como separador
    
    // 2. Eliminar los 5 números mayores que $numero
    $mayorNum = array_filter($arrayOrdenado, fn($n) => $n > $numero);
    $cincoMayores = array_slice(array_reverse($mayorNum), 0, 5);
    $array = array_diff($array, $cincoMayores);
    echo "5 mayores eliminados: ", implode(", ", $cincoMayores), "\n";
    
    // 3. Eliminar todos los números menores que $numero
    $eliminadosMenores = array_filter($array, fn($n) => $n < $numero);
    $array = array_filter($array, fn($n) => $n >= $numero);
    echo "Números eliminados (menores que $numero): ", implode(", ", $eliminadosMenores), "\n";
    
    // 4. Sustituir los 5 mayores por otro array
    rsort($array); // Ordenamos de mayor a menor
    $mayoresCinco = array_slice($array, 0, 5);
    $array = array_diff($array, $mayoresCinco);
    $array = array_merge($array, array_slice($arrayReemplazo, 0, 5));
    echo "Sustituidos los 5 mayores por: ", implode(", ", array_slice($arrayReemplazo, 0, 5)), "\n";
    
    // Resultado final
    echo "Array final: ", implode(", ", $array), "\n";
}


?>
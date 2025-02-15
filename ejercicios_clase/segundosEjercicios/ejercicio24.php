<?php
/*24.	Realizar un script que dada una cadena con números separados por comas lo convierta en un array 
de los números ordenados y elimine todos los elementos mayores de 100 sí es que existen y los menores de 50 sí es que existen.*/

    function convertirCadena($cadena) {
        $array = explode(',', $cadena);
        sort($array);
        return $array;
    }
    
    function eliminarElementos($array, $mayor, $menor)
    {
        $nuevoArray = array_filter($array, function($elemento) use ($mayor, $menor) {
        return ($elemento < $menor || $elemento > $mayor);
        });
        return $nuevoArray;
    }

    $cadena = "10, 50, 200, 30, 70, 90, 120, 150, 180, 250";
    $array = convertirCadena($cadena);
    $nuevoArray = eliminarElementos($array, 100, 50);


?>
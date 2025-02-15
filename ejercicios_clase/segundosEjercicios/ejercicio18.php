<?php
/*10. Nos interesa mantener un matriz de notas para los alumnos de la clase de 2º de 
DAW. En ella guardaremos los datos de las notas de todos los módulos: BD, 
Programación, SI, LM, ED, FOL para cada uno de los alumnos. Luego en una 
variable tendremos un módulo y un alumno y nos mostrará la nota de ese módu-
lo para ese alumno, sí en la variable módulo ponemos “TODOS” nos mostrará 
las notas de todos los módulos.*/

$alumnos = array(
    "Pilar" => array(
        "BD" => 8, 
        "Programación" => 9 , 
        "SI" => 7, 
        "LM" => 6, 
        "ED" => 5, 
        "FOL" => 4), 
    "Miguel" => array(
        "BD" => 9, 
        "Programación" => 8 , 
        "SI" => 7, 
        "LM" => 6, 
        "ED" => 5, 
        "FOL" => 4),
    "Ainhoa" => array(
        "BD" => 8, 
        "Programación" => 9 , 
        "SI" => 7, 
        "LM" => 6, 
        "ED" => 5, 
        "FOL" => 4),
    );

    $alumno = $_GET['nombre'];

    $modulo = $_GET['modulo'];

    if ($modulo == "TODOS") {
         print_r($alumnos[$alumno]);
    } else {
        echo "La nota del alumno/a $alumno en el módulo de $modulo es: " . $alumnos[$alumno][$modulo];
    }

?>
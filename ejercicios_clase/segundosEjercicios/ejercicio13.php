<!--4.	Crea un programa php en el que se cree una variable que indique el tipo de fi-gura geométrica: 
cuadrado, rectángulo, triángulo o pentágono y en función del tipo de figura que le hayas puesto 
te diga cómo se calcularía el valor del perí-metro. Por ejemplo: Deberá mostrar por pantalla algo así como: 
“Para hallar el perímetro de un cuadrado hay que conocer la longitud de uno de sus lados y multiplicarla por 4”…-->

<?php
$figura = $_GET['figura'];

if ($figura == "cuadrado") {
    echo "Para hallar el perímetro de un cuadrado hay que conocer la longitud de uno de sus lados y multiplicarla por 4.";
} elseif ($figura == "rectángulo") {
    echo "Para hallar el perímetro de un rectángulo hay que conocer la longitud de uno de sus lados y multiplicarla por 4 
    y además sumar la longitud de otro lado y multiplicarla por 2.";
} elseif ($figura == "triángulo") {
    echo "Para hallar el perímetro de un triángulo hay que conocer la longitud de uno de sus lados y multiplicarla por 3.";
} else {
    echo "Eror, figura no válida.";
}

?>
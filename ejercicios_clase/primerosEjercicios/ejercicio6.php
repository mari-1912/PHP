<!--6.	Realiza un programa en PHP que pida un número y pinte un triángulo rectángulo 
de tantas filas como el número introducido pero invertido.-->

<?php
$numero=$_GET['numero']; //pedimos numero al usuario

for ($i = $numero; $i >= 1; $i--) {  //usamos primer for para iterar sobre las filas
    for ($j = 1; $j <= $i; $j++) { //usamos el segundo for para iterar sobre las columnas
        echo "*"; //usamos el asterisco para pintar el triangulo
    }
    echo "<br>"; //salto de linea
}

?>
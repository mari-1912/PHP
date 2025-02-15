<!--//5. Realiza un programa en php que pida un numero y pinte un triangulo rectangulo de.-->

<?php
$numero=$_GET['numero']; //pedimos numero al usuario

for ($i=1; $i<=$numero; $i++) { //usamos primer for para iterar sobre las filas
    for ($j=1; $j<=$i; $j++) { //usamos el segundo for para iterar sobre las columnas
        echo "*"; //usamos el asterisco para pintar el triangulo
    }
    echo '<br>'; //salto de linea
}
?>

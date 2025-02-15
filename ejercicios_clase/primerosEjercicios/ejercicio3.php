<!--//3. Realiza un programa en php que pida dos numeros e informe de cual de ellos es mayor o si son iguales.-->

<?php
    $numero1=$_GET['numero1']; //pedimos los dos numeros al usuario
    $numero2=$_GET['numero2'];
    if ($numero1 > $numero2) { //usamos un if para ver cual es mayor o si son iguales
        echo "El primer número es mayor que el segundo";
    } elseif ($numero1 < $numero2) {
        echo "El segundo número es mayor que el primero";
    } else {
        echo "Los dos números son iguales";
    }
?>
<!--4. Realiza un programa en php que pida dos numeros e imprima los numeros intermedios entre ellos.-->
<?php
$num1=$_GET['numero1']; //pedimos los numeros al usuario
$num2=$_GET['numero2'];
//comparamos las posibles opciones con un if
if ($num1>$num2) {  //cuando el primer numero sea mayor que el segundo
    echo 'Lo números intermedios son: ';
    for ($i=$num2+1; $i<$num1; $i++) {
        echo $i;
    } 
} elseif ($num2>$num1) { //cuando el segundo numero sea mayor que el primero
    echo 'Lo números intermedios son: ';
    for ($j=$num1+1; $j<$num2; $j++) {
        echo $j;
    }
} else { //y para cuando sean iguales
    echo "Los numeros son iguales";
} 

?>
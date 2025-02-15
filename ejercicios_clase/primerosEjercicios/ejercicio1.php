<?php

/*
1. Realiza un programa en php que pida la categoria, el precio hora y las horas trabajadas 
y en funcion de esos calcule el sueldo de un empleado y lo muestre.
- para categoria 1 multiplicamos por 1 el total
- para categoria 2 multiplicamos por 1.2 el total
- para categoria 3 multiplicamos por 1.3 el total 
*/

//declaramos las variables que va a introducir el usuario por pantalla
$categoria=$_GET['categoria'];
$precio_hora=$_GET['precio_hora'];
$horas_trabajadas=$_GET['horas_trabajadas'];
//calculamos el sueldo del empleado
$sueldo_empleado=$precio_hora*$horas_trabajadas;

if (is_numeric($categoria)&&($categoria>0 && $categoria<4)) { //comprobamos que la categoria sea numerica y que esté entre 1 y 3
    if ($categoria == 1) {
        $sueldo_empleado = $sueldo_empleado * 1;
        echo 'El salario del empleado es: ' . $sueldo_empleado;
    } else if ($categoria == 2) {
        $sueldo_empleado = $sueldo_empleado * 1.2;
        echo 'El salario del empleado es: ' . $sueldo_empleado;
    } else if ($categoria == 3) {
        $sueldo_empleado = $sueldo_empleado * 1.3;
        echo 'El salario del empleado es: ' . $sueldo_empleado;
    } else {
        echo 'Categoría errónea';
    }
} else {
    echo 'Categoría errónea';
}

?>
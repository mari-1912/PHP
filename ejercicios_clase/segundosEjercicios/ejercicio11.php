
<!--2.	Nos interesa mantener un array para los empleados de una empresa, 
en cada posición del array guardaremos una estructura de datos para los datos de un empleado de una empresa. 
Del empleado guardaremos: Nombre, apellidos, fe-cha de nacimiento, dirección postal, email, salario_bruto, comisiones. 
Esto lo guardaremos en un array asociativo.
Dado el nombre de un empleado mostrar todos sus datos.
-->
<?php
//creamos el array asociativo con todos los datos
$empleados = array(
    "Pilar" => array(
        "apellidos" => "Quintero",
        "fecha_nacimiento" => "2000-12-19",
        "direccion_postal" => "Calle 1, 1-1",
        "email" => "pilar.quintero@gmail.com",
        "salario_bruto" => 2000,
        "comisiones" => 200
    ),
    "Pedro" => array(
        "apellidos" => "García",
        "fecha_nacimiento" => "1991-01-01",
        "direccion_postal" => "Calle 2, 2-2",
        "email" => "pedro.garcia@empresa.com",
        "salario_bruto" => 2500,
        "comisiones" => 1000
    ),
    "Juan" => array(
        "apellidos" => "López",
        "fecha_nacimiento" => "1995-06-15",
        "direccion_postal" => "Calle 3, 3-3",
        "email" => "juan.lopez@empresa.com",
        "salario_bruto" => 3000,
        "comisiones" => 500
        ),
);

// Buscamos el empleado por nombre, el nombre lo introduce el usuario
$nombreEmpleado = $_GET['nombre'];
$empleado = $empleados[$nombreEmpleado]; 

foreach $empleados as $clave  => $valor {
    if ($clave == $nombreEmpleado) {
        $empleado = $valor;
    }
}

// Mostramos los datos del empleado
echo "Nombre: $nombreEmpleado";
echo '<br>';
echo "Apellidos: $empleado[apellidos]";
echo '<br>';
echo "Fecha de nacimiento: $empleado[fecha_nacimiento]";
echo '<br>';
echo "Dirección postal: $empleado[direccion_postal]";
echo '<br>';
echo "Email: $empleado[email]";
echo '<br>';
echo "Salario bruto: $empleado[salario_bruto]";
echo '<br>';
echo "Comisiones: $empleado[comisiones]";

?>

            
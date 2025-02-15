<?php
/*
Ejercicio 1
Realiza un programa en PHP que pida la categoría, el precio hora y las horas trabajadas y en función de eso 
calcule el sueldo de un empleado y lo muestre.
Para Categoría 1 multiplicamos por 1 el total.
Para Categoría 2 multiplicamos por 1,2 el total.
Para Categoría 3 y sucesivas multiplicamos por 1,3 el total.
*/

/*
$cat=$_GET["categoria"];
$precioHora=$_GET["precioHora"];
$horasTrab=$_GET["horasTrabajadas"];

if (is_numeric($cat) && ($cat>0)){
    $total=$precioHora * $horasTrab;
    if ($cat==2){
        //$total=($total* 1.2);
        $total*=(1.2);
    }else{
        $total=($total* 1.3);
    }
    echo "el salario del empleado es ". $total;

}else{
    echo "categoria errónea";
}*/

/*
Ejercicio 2
Realiza un programa en PHP que pida un número e imprima todos los números hasta el número introducido.
*/

/*
$num=$_GET["numero"];
echo "El numero introducido es: " . $num;
for ($i=0;$i<$num;$i++){
    echo "Número $i" . "<br>";
}
*/

/*
Ejercicio 3
Realiza un programa en PHP que pida dos números e informe de cual de ellos es mayor ó sí son iguales.
*/

/*
$num1=$_GET["numero1"];
$num2=$_GET["numero2"];
$num1=222;
$num2=30;
if ($num1>$num2){
    echo "El número $num1 es mayor que $num2";
}elseif ($num2>$num1){
    echo "El número $num2 es mayor que $num1";
}else{
    echo "ambos números son iguales";
}
*/

/*
Ejercicio 4
Realiza un programa en PHP que pida dos números e imprima los números intermedios entre ellos.
*/

/*
$num=$_GET["numero"];
echo "El numero introducido es: " . $num;
for ($i=$num;$i<$num;$i++){
    echo "Número $i" . "<br>";
}
*/

/*
Ejercicio 5
Realiza un programa en PHP que pida un número y pinte un triángulo rectángulo de tantas filas como el número introducido.
*/

/*
$num=$_GET["numero"];
echo "Número de filas del triángulo: " . $num. "<br>";
for ($i=0;$i<$num;$i++){
    for ($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
*/


/*
Ejercicio 6
Realiza un programa en PHP que pida un número y pinte un triángulo rectángulo de tantas filas como el 
número introducido pero invertido.
*/
/*
$num=$_GET["numero"];
echo "Número de filas del triángulo: " . $num . "<br>";
for ($i=0;$i<=$num;$i++){
    for ($j=$num;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
*/
/*Ejercicio 7
Realizar un programa que dado un array de números, sume el valor de todos los números de array y lo muestre.
Crear un formulario que únicamente tenga un botón “submit” para “Crear array y sumar contenido” y mostrará 
el contenido de todos los elementos de un array y la suma de todos ellos. (podéis usar print_r()).
*/


/*
$arr1=array(23,45,67,89,67,90);

$arr2[0]=23;
$arr2[1]=238;
$arr2[2]=223;
$arr2[7]=230;
$arr2[9]=23;

for ($i=0;$i<20;$i++){
    $arr3[]=rand(1,100);
}
$total=0;
for ($i=0;$i<count($arr3);$i++){
    $total += $arr3[$i];

}

echo "el array es:  "."<br>";
print_r($arr3);
echo "<br>". "el total es: ". $total;

*/

/* Ejercicio 8
Dado un array de palabras decir cuantas palabras tienen la vocal “a”.
/*

$palabras=["Lunes","martes","miercoles","jueves","viernes","sabado","domingo", "Enero","Febrero","Marzo","Abril","Mayo","aaaaa"];
print_r ($palabras);
$total=0;
for ($i=0;$i<count($palabras);$i++){
    if (str_contains($palabras[$i],"a")){
        $total++;
    }
}
echo("Hay $total palabras que contienen la vocal a");
*/


/* Ejercicio 9
Dado un array de palabras decir cuantas palabras tienen la vocal “a” y cuantas “a” tiene.
*/
/*
$palabras=["a","aa","aaa","jueves","a","aa","aaa", "Enero","Febrero","Marzo","Abril","Mayo","aaaaa"];
print_r ($palabras);
echo "<br><br><br>";
$numA=[];
for ($i=0;$i<count($palabras);$i++){
    $numApariciones=substr_count($palabras[$i],"a");
    if (!isset($numA[$numApariciones])){
        $numA[$numApariciones]=1;
    }else{
        $numA[$numApariciones]++;
    }
}
print_r($numA);
*/

/*Ejercicio 10
Nos interesa mantener un array con los nombre de los alumnos de 2º de DAW ordenados 
alfabéticamente (utiliza la función para mostrarlos ordenados). Y los mostraremos por pantalla.
*/
/*
$alum=["Luis Pérez", "Blanca González","Rosa","Pedro","Juan","Antonio"];
sort($alum);
print_r($alum);
*/



/*Ejercicio 11
Nos interesa mantener un array para los empleados de una empresa, en cada posición del 
array guardaremos una estructura de datos para los datos de un empleado de una empresa.
Del empleado guardaremos: Nombre, apellidos, fecha de nacimiento, dirección postal, email, 
salario_bruto, comisiones. Esto lo guardaremos en un array asociativo.
Dado el numero de un empleado mostrar todos sus datos.
*/

/*
$emp1=array("nombre"=>"nom1", "apellidos"=>"ape1","fechaNacimiento"=>"02/02/2024",
"direccion"=>"calle1","email"=>"email1@gmail.com","salario"=>10000, "comisiones"=>2000);
$emp2=array("nombre"=>"nom2", "apellidos"=>"ape2","fechaNacimiento"=>"02/02/2024",
"direccion"=>"calle2","email"=>"email2@gmail.com","salario"=>10000, "comisiones"=>2000);
$emp3=array("nombre"=>"nom3", "apellidos"=>"ape3","fechaNacimiento"=>"02/02/2024",
"direccion"=>"calle3","email"=>"email3@gmail.com","salario"=>10000, "comisiones"=>2000);
$emp4=array("nombre"=>"nom4", "apellidos"=>"ape4","fechaNacimiento"=>"02/02/2024",
"direccion"=>"calle4","email"=>"email4@gmail.com","salario"=>10000, "comisiones"=>2000);


$empleados=array( 101=>$emp1,102=>$emp2,103=>$emp3,104=>$emp4);
print_r ($empleados);
echo "<br><br><br><br>";
$existe=102;
foreach ($empleados as $clave => $valor){
    if ($clave== $existe){
        foreach ($valor as $clave => $valor){
            echo $valor;
        }
    }
}
 if (isset($empleados[$existe])){
    foreach ($empleados[$existe] as $clave => $valor){
        echo $valor;
    }
 }else{
    echo "empleado no existe";
 }
echo "<br><br><br><br>";
$empleados1=array( "emp1"=>$emp1,"emp2"=>$emp2,"emp3"=>$emp3,"emp4"=>$emp4);
print_r ($empleados1);
echo "<br><br><br><br>";

$empleados3[]=$emp1;
$empleados3[]=$emp2;
$empleados3[]=$emp3;
$empleados3[]=$emp4;

print_r ($empleados3);
echo "<br><br><br><br>";
echo "<br><br><br><br>";

$empleados4=[
    "Pilar"=>$emp1,
    "Pedro"=>$emp2,
    "Lucas"=>$emp3,
    "Ramon"=>$emp4
];
$empleadosBuscar="Lucas";
if (isset($empleados4[$empleadosBuscar])){
    foreach ($empleados4[$empleadosBuscar] as $clave => $valor){
        echo $valor;
    }
 }else{
    echo "empleado no existe";
 }

//$mostrar=$_GET["numero"];
$mostrar=101;
if (isset($empleados[$mostrar])){
    foreach($empleados[$mostrar] as $c => $v){
        echo "El $c  para $mostrar es:  $v" . "<br>";
    }
}else{
    echo "empleado no existe";
}
*/

/*Ejercicio 12
Tenemos un array asociativo de nombres de alumnos => año de nacimiento. 
Ordenarlos alfabéticamente por nombre de alumno y mostrarlos.
Ordenarlos por año de nacimiento y mostrarlos.
*/
/*
$alum=["pedro"=>2000,"Juan"=>2001,"Luis"=>1998,"Leon"=>2012,"Raul"=>1978];
echo "Alumnos ordenados por nombre <br>";
ksort($alum);
//sort($alum);
print_r($alum);
echo "<br>";
echo "Alumnos ordenados por fecha de nacimiento <br>";
asort($alum);
print_r($alum);
*/
/*
6.	Con el array creado anteriormente en el que tenemos los días de la semana y asociada la comida del día 
y una variable que indica el día de la semana, utilizando una estructura de tipo “switch” en función del 
día escribir por pantalla cuales son las comidas.6.	Con el array creado anteriormente en el que tenemos los
días de la semana y aso-ciada la comida del día y una variable que indica el día de la semana, utilizando una
 estructura de tipo “switch” en función del día escribir por pantalla cuales son las comidas.
*/

$comidasSemana=["Lunes"=>"Macarrones","Martes"=>"Arroz","Miércoles"=>"Pasta","Jueves"=>"Patatas","Viernes"=>"Fruta"];
$dia="Miércoles";
/*
switch ($dia) {
    case "Lunes":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Martes":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Miércoles":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Jueves":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Viernes":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Sábado":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    case "Domingo":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    default:
        echo "El día $dia no existe.";        
}

switch ($dia) {
    case "Lunes":
    case "Martes":
    case "Miércoles":
    case "Jueves":
    case "Viernes":
    case "Sábado":
    case "Domingo":
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    default:
        echo "El día $dia no existe.";
        
}
        
switch ($dia) {
    case ("Lunes" or "Martes" or "Miércoles" or "Jueves" or "Viernes" or "Sábado" or "Domingo"):
        echo "La comida para el $dia es $comidasSemana[$dia]";
        break;
    default:
        echo "El día $dia no existe."; 
}
*/

/*Ejercicio 17
Utilizando una estructura “for” calcular el promedio de los “n” primeros números. 
Es decir: sí n=4, calculará la media de 1+2+3+4. Sí n=7 calculará la media de 1+2+3+4+5+6+7 y lo muestra por pantalla.
*/
/*
$arr1=array(23,45,67,89,67,90);
$num=20;
$longitud=count($arr1);
if($longitud<$num){
    $num=$longitud;
}
$total=0;
for ($i=0;$i<$num;$i++){
    $total+=$arr1[$i];
}
$media=$total/$num;
echo $total . "<br>".$num;
echo "la media es: ". $media;
*/

/*
8.	Define un array de números desordenados, un límite. El script creará un array ordenado que 
contenga solo los elementos del array original menores que el lími-te y lo imprimirá por pantalla.
NO VALE UTILIZAR LA FUNCIÓN PARA ORDENAR ARRAYS, DEBES ORDENARLOS MEDIANTE TU PROPIO ALGORITMO.
*/
/*Supone un array de números enteros*/
/*
$arr1=array(23,54,45,67,89,67,90,1);
$limite=78;
$minAnterior=0;
$minActual=$limite;
$arrResul=[];
for ($i=0;$i<count($arr1);$i++){
    for ($j=0;$j<count($arr1);$j++){
        if (($arr1[$j]<$limite)&&($arr1[$j]>$minAnterior) && (!in_array($arr1[$j],$arrResul)) &&
        ($arr1[$j]<$minActual)){
            $minActual=$arr1[$j];
        }
    }
    echo $minActual . "<br>";
    if (!in_array($minActual,$arrResul) && ($minActual!=$limite)){
        $arrResul[]=$minActual;
    }
    $minAnterior=$minActual;
    $minActual=$limite;
}
print_r($arrResul);
*/
/*Supone un array de números enteros*/
/*
$arr1=array(23,54,45,67,89,67,90,1);
$arrNoDupli=array_unique($arr1);
$limite=78;
$arrResul=[];
for ($i=0;$i<count($arrNoDupli);$i++){
    $min=min($arrNoDupli);
    echo $min. "<br>";
    if ($min<$limite){
        $arrResul[]=$min;
    }
    $clave= array_search($min,$arrNoDupli);
    $arrNoDupli[$clave]=$limite;    
}
print_r($arrResul);*/

/*
19.	Realiza una función que tenga almacenada en una variable una cadena y com-prueba sí la cadena es palíndroma 
(es una palabra o frase que se lee igual en un sentido que en otro. Ejemplo: “amo la paloma”, “anita lava la tina”…)
 y por pan-talla muestre la cadena y el mensaje “Es palíndroma” ó “no es palíndroma”.
*/
/*
$pal="amo la paloma";
$pal=str_replace(" ","",$pal);
//Utilizando funciones.
$reversePal=strrev($pal);
echo $pal. "<br>";
echo $reversePal. "<br>";
if ($pal==$reversePal){
    echo "es palíndorma";
}else{
    echo "No palíndorma";
}

// Comparando en el array las distintas posiciones.
$arrPal=str_split($pal,1);
$total=count($arrPal)-1;
$iguales=1;
$cont=0;
while (($iguales) && ($cont<($total/2))){
    if ($arrPal[$cont]!=$arrPal[$cont]){
        $iguales=0;
    }
    $cont++;
}
if($iguales){
    echo "es palíndorma";
}else{
    echo "No palíndorma";
}
*/
/*
20.	Realizar un script que dados 3 arrays de números, los una eliminando repetidos y 
muestre por pantalla el valor menor de todos ellos.
**/
/*
$arr1=array(23,54,45,67,89,67,90,-1);
$arr2=array(23,54,45,67,100,101,102);
$arr3=array(23,54,45,67,89,67,90,1);
$arrResul= array_merge($arr1,$arr2,$arr3);
$arrSinRepe= array_unique($arrResul);
sort($arrSinRepe);
echo "El menor es: ". $arrSinRepe[0];
*/

/*
21.	Realizar un script que a partir de un array de letras lo rellene hasta alcanzar los 30 elementos 
(sí tiene 30 ó más elementos no hace nada), lo rellenará con el mismo número de caracteres por la derecha 
y por la izquierda (sí falta un número impar de elementos para llegar a 30, incluirá la mitad por la izquierda 
y la mitad+1 por la derecha). El carácter de relleno será una letra menor que el carácter menor (en ASCII) de 
todos los elementos por la izquierda y por la derecha un carácter ma-yor (en ASCII) que todos los elementos del 
array original.
*/
/*
$arr=array("b","B","h","x","h","c");
if (count($arr)<30){
    $carRelleno=30-count($arr);
    if ($carRelleno%2==0){
        $numCarIzq=$carRelleno/2;
        $numCarDer=$carRelleno/2;
    }else{
        $numCarIzq=$carRelleno/2;
        $numCarDer=($carRelleno/2)+1;
    }
    $minAscii=255;
    $maxAscii=0;
    for($i=0;$i<count($arr);$i++){
        if (ord($arr[$i])>$maxAscii){
            $maxAscii=ord($arr[$i]);
        }
        if (ord($arr[$i])<$minAscii){
            $minAscii=ord($arr[$i]);
        }
    }
    $maxAscii++;
    $minAscii--;
    $carIzq=chr($minAscii);
    $carDer=chr($maxAscii);
    echo $numCarDer;
    echo $numCarIzq;
    echo "<br><br><br>";
    $r1=array_pad($arr,(count($arr)+$numCarDer),$carDer);
    $r2=array_pad($r1,-(count($r1)+$numCarDer),$carIzq);
    print_r($r2);
}
*/
/*
22.	Realizar un script que dado un array de números y un número, devuelva y mues-tre:
o	Los elementos del array mayores que el número.
o	Los 10 elementos del array mayores que el número.
o	Los 10 elementos del array menores que el número.

*/
/*
$arrNum=array(10,25,33,43,35,78,789,24,1,56,896,325,12,41,51,58,74,591,523,564,582,852);
$numero=10000;
sort($arrNum);
$seguir=1;
$i=0;
while ($seguir && $i<count($arrNum)){
    if ($arrNum[$i]>$numero){
        $seguir=0;
    }
    $i++;
}
if ($i==count($arrNum)){
    echo "No hay elementos mayores que el numero $numero en el array";
}else{
    $elemMayores=array_slice($arrNum,$i);
    $elemMayores10=array_slice($arrNum,$i,10);
    if ($i>9){
        $elemMenores10=array_slice($arrNum,$i-10,10);
    }else{
        $elemMenores10=array_slice($arrNum,0,$i-1);
    }
    print_r($arrNum);
    echo "<br><br><br>";
    print_r($elemMayores);
    echo "<br><br><br>";
    print_r($elemMayores10);
    echo "<br><br><br>";
    print_r($elemMenores10);
    echo "<br><br><br>"; 
}
*/
/*
24.	Realizar un script que dada una cadena con números separados por comas lo convierta 
en un array de los números ordenados y elimine todos los elementos mayores de 100 sí es 
que existen y los menores de 50 sí es que existen.
*/
$cadNum="10,25,33,43,35,78,789,24,1,56,896,325,12,41,51,58,74,591,523,564,582,852";
$arrNum=explode(",",$cadNum);
sort($arrNum);
$indice50=-1;
$indice100=-1;
for ($i=0;$i<count($arrNum);$i++){
    if ($arrNum[$i]<50){
        $indice50=$i;
    }
    if ($arrNum[$i]>100 && $indice100==-1){
        $indice100=$i;
    }
}
if ($indice100>-1){
    $resul=array_slice($arrNum,0,$indice100);
}
if($indice50>-1){
    $final=array_slice($resul,++$indice50);
}
print_r($arrNum);
echo "<br><br><br><br>";
print_r($resul);
echo "<br><br><br><br>";
print_r($final);


?>

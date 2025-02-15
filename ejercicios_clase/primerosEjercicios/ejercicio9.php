<!--9.	Dado un array de palabras decir cuantas palabras tienen la vocal “a” y cuantas “a” tiene. 
Deberá devolver un array del siguiente modo: $a=[1,5,7] 
Esto indica que hay 1 palabra sin “a”, 5 palabras con 1 “a”  y 7 palabras con 2 “a”.
-->

<?php
$array_palabras=array('holaaa','buenos','diaaas','estamos','estudiando','con','mas','ejercicios');
print_r($array_palabras);
$contador_a;
$resultado=[];

foreach ($array_palabras as $palabra) {
    $contador_a = substr_count($palabra, 'a');

    if (!isset($resultado[$contador_a])) {
        $resultado[$contador_a] = 0;
    }
    $resultado[$contador_a]++;
}
print_r($resultado);

?>
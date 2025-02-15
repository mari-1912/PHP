<!--Crear un formulario que tenga un boton submit y cree un array y 
sume su contenido y muestre ambas cosas -->
<?php

    $suma = 0;
    $mi_array = array (1,5,7,6,10);
    print_r($mi_array);
    $suma = array_sum($mi_array);
    echo $suma;

?>
    




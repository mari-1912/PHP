<!--6. Con el array creado anteriormente en el que tenemos los días de la semana y 
asociada la comida del día y una variable que indica el día de la semana, utili-
zando una estructura de tipo “switch” en función del día escribir por pantalla 
cuales son las comidas. -->

<?php
//primero hacemos un array con los dias de la semana como claves y las comidas como valores
$menu_semanal = array(
    "Lunes" => "Pollo con patatas fritas",
    "Martes" => "Lasaña",
    "Miércoles" => "Bacalao",
    "Jueves" => "Ensalada de pasta",
    "Viernes" => "Lentejas",
    "Sábado" => "Cocido",
    "Domingo" => "Pizza"
    );
// despues pedimos por pantalla al usuario el dia de la semana que quiere consultar
    $dia_semana = $_GET['dia'];

    switch ($dia_semana) { //hacemos un switch para que segun el dia indicado lo relacione con el menu de arriba
        case "Lunes":
        case "Martes": 
        case "Miércoles":    
        case "Jueves":     
        case "Viernes":    
        case "Sábado":       
        case "Domingo":  
            echo "El menu del $dia_semana es: $menu_semanal[$dia_semana]"; 
            break;
        default:
            echo "El valor indicado no es un día de la semana";
    }

    //tambien se puede de esta manera
    /*
    case ('Lunes' or 'Martes' or ...)
    */

?>

<?php
/*Dada una cadena devolver esa misma cadena convirtiendo las vocales a mayúsculas y las 
consonantes a minúsculas.*/
    function convertir_cadena($cadena){
        $cadena = strtolower($cadena);
        $cadena = strtr($cadena, 'aáäeéëiíïoóöuúü', 'AÁÄEÉËIÍÏOÓÖUÚÜ');
        return $cadena;
    }

echo convertir_cadena("BueNoS DiaS");
echo "<br><br>";
echo convertir_cadena("Lorem iPsum DOlor sit aMet, cOnsecTetur adipiscing elit.");
?>
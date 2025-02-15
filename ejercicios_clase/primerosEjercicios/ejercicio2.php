<?php
    //pedimos el numero que tiene que introducir el usuariio
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 0;
?>
    <h1>Lista de números hasta el número que has introducido:</h1>
<?php
    for ($i = 0; $i <= $numero; $i++) {
            echo "<li>$i</li>";
        }
        echo "</ul>";
    
?>
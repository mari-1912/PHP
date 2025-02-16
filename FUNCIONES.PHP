<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de PhP</title>
</head>
<body>
    <h1>Funciones del lenguaje</h1>
    <h2>Funciones para el tratamiento de los numeros</h2>
    <ol>
        <li><b>Redondear un numero</b></li>
        <ul>
            <li>round()
                <?php
                    echo "<br> Ejemplo redondeo hacia arriba " . round(5.55,1,PHP_ROUND_HALF_UP);
                    echo "<br> Ejemplo redondeo hacia abajo " . round(2.35,1,PHP_ROUND_HALF_DOWN);
                ?>
                <p>La funcion acepta un float o un int
                    pero si es float, solo se muestra el int
                    si añadimos una coma y otro numero despues
                    esto indica el numero de decimales que 
                    queremos que se muestren y será el redondeo.
                    Si ademas añadimos un tercer parametro
                    es una constante, que indica como queremos
                    que se redondee el numero, por defecto redondea
                    hacia arriba.
                </p>
            </li>
            <li> ceil()
                <?php
                    echo "<br> Ejemplo de redondeo hacia el entero superior " . ceil(4.345);
                ?>
                <p>Solo tiene un parametro de entrada y lo
                    que hace es redondear hacia arriba
                </p>
            </li>
            <li>floor()
                <?php
                    echo "<br> Ejemplo de redonde hacia el entero inferior" . floor(4.345);
                ?>
                <p>
                    solo tiene un parametro de entrada y lo 
                    que hace es redondear hacia abajo
                </p>
            </li>
        </ul>
        <li><b>Valor absoluto</b>
            <?php
                echo "<br> Funcion abs()";
                echo "<br> Este ejemplo es un -5 y da como resultado: " . abs(-5);
            ?>
            <p>Calcula el valor absoluto del numero sin el signo</p>
        </li>
        <li><b>Calcular potencias</b>
            <?php
                echo "<br> Funcion pow()";
                echo "<br> En este ejemplo ponemos pow(2,5), que es
                2 elevada a la 5 y da como resultado: " . pow(2,5);
            ?>
            <p>Esta funcion pide dos parametros, un numero 
                que sera la base y el segundo sera el exponente
                de dicho numero 
            </p>
        </li>
        <li><b>Calcular raices</b>
            <?php
                echo "<br> funcion sqrt()";
                echo "<br> La raiz cuadrada de 16 es: " . sqrt(16);
                echo "<br> La raiz cuadrada de 7 es: " . sqrt(7);
                echo "<br> Pero si usamos round tambien es: " . round(sqrt(7),2);
            ?>
            <p>Solo admite un parametro y calcula su raiz cuadrada
                si ponemos un numero que su raiz no de un numero 
                entero exacto como en el segundo ejemplo, 
                podemos unir la funcion sqrt con la 
                funcion round para que lo redondee 
            </p>
        </li>
        <li><b>Generar aleatorios</b>
            <?php
                echo "<br> Funcion rand()";
                echo "<br> devuelve un numero aleatorio: " . rand();
                echo "<br> devuelve un numero aleatorio entre el 1 y el 10: " . rand(1,10);
            ?>
            <p>se pueden poner hasta dos parametros, 
                pero ambos son opcionales, es decir, que si 
                lo ejecutamos sin ningun parametro, devuelve 
                un numero aleatorio. Cada vez que recarges la 
                pagina ese numero sera diferente.
                Es posible indicar un rango en el que debe 
                de estar ese numero aleatorio, por ejemplo 
                del 1 al 10 como en el ejemplo 2.
            </p>
        </li>
        <li><b>Dar formato a un Número</b>
            <?php
                echo "<br> Funcion number_format()";
                echo "<br> Para el numero
                1005.4562 con 2 decimales y 
                la , para separar los decimales y el .
                para delimitar los miles
                nos da: " . number_format(1005.4562,2,",",".");
            ?>
            <p>Con esta funcion podemos cambiar los parametros 
                de las comas flotantes y los . para los miles 
                asi como indicar el numero de decimales que 
                queremos que se muestren
            </p>
        </li>
    </ol>
    <h2>Funciones para el tratamiento de cadenas</h2>
        <ol>
            <li><b>Contar en una cadena</b>
                <ul>
                    <li>Caracteres
                        <?php
                            echo "<br> funcion strlen()";
                            echo "<br> En la frase Hola Pipsicola hay estos caracteres: " . strlen("Hola Pipsicola");
                        ?>
                        <p>cuenta todos los caracteres del string 
                            hay que tener en cuenta que tambien contabiliza
                            los espacios en blanco como un caracter mas
                        </p>
                    </li>
                    <li>Palabras
                        <?php
                            echo "<br> funcion str_word_count()";
                            echo "<br> De nuevo en la frase Hola Pipsicola hay estas palabras: " . str_word_count("Hola Pipsicola");
                        ?>
                        <p>esta funcion sirve para contar las Palabras 
                            que hay en un string, en este caso no tiene 
                            en cuenta los espacios en blanco.
                        </p>
                    </li>
                </ul>
            </li>
            <li><b>Invertir la cadena</b>
                <?php
                    echo "<br> funcion strrev()";
                    echo "<br> La frase Hola Pipsicola al revés es: " . strrev("Hola Pipsicola");
                ?>
                <p>Esta funcion invierte toda la cadena 
                    caracter por caracter, quedando totalmente
                    al reves que la cadena original 
                </p>
            </li>
            <li><b>Repetir la cadena</b>
                <?php
                    echo "<br> funcion str_repeat()";
                    echo "<br> Vamos a repetir el simbolo * 10 veces: " . str_repeat('*',10);
                ?>
                <p>en los parentesis se colocan dos parametros 
                    el primero es el caracter que queremos que 
                    se repita y el segundo es el numero de veces 
                    que queremos que se repita .
                </p>
            </li>
            <li><b>Dividir la cadena</b>
                <?php
                    echo "<br> funcion wordwrap()";
                    echo "<br> Dividimos por cada 2 caracteres la palabra
                    Pipsicola: " . "<br>" . wordwrap("Pipsicola",2,"<br>",true);
                ?>
                <p>Esta funcion admite cuatro parametros
                    El primero indica el string que queremos Dividir
                    El segundo indica cada cuantos caracteres 
                    el tercero con que lo vamos a dividir 
                    el cuarto por defecto esta en false asi que 
                    lo podemos activar poniendo true
                </p>
            </li>
            <li><b>Encontrar un caracter</b>
                <?php
                    echo "<br> funcion strpos()";
                    echo "<br> vamos a encontrar la posicion de la
                    palabra buenos en la frase Hola, buenos dias: " . 
                    strpos("Hola, buenos dias","buenos");
                ?>
                <p>esta funcion admite dos parametros, el primero 
                    es el string completo que queremos analizar y el 
                    segundo es la palabra o el caracter del que queremos 
                    descubrir la posicion de su primera aparicion,
                    nos devuelve el numero entero de la posicion 
                </p>
            </li>
            <li><b>Reemplazar un caracter</b>
                <?php
                    echo "<br> funcion str_replace()";
                    echo "<br> Vamos a sustituir las letras i
                    de la palabra Pipsicola por la letra e: " . 
                    str_replace("i","e","Pipsicola");
                ?>
                <p>en esta funcion tenemos que pasar 3 parametros, 
                    el primero es el caracter del string que queremos 
                    reemplazar, el segundo es el caracter por el que lo
                    queremos reemplazar y por ultimo el string dentro 
                    del que se encuentra ese caracter 
                </p>
            </li>
        </ol>
    <h2>Funciones para el tratamiento de arrays</h2>
        <ol>
            <li><b>Agregar elementos</b>
                <?php
                    echo "<br> funcion array_push() <br>";
                    $a = [3,5];
                    echo "Primer ejemplo array original: <br> ";
                    print_r($a);
                    array_push($a,1);
                    echo "<br> Segundo ejemplo añadiendo un 1 con push: <br> ";
                    print_r($a);
                    echo "<br> funcion array_unshift() <br> ";
                    echo "Tercer ejemplo añadiendo un 1 con unshift al principio: <br> ";
                    array_unshift($a,2);
                    print_r($a);
                ?>
                <p>
                    con array_push() en el primer elemento le 
                    pasamos el array y en el segundo el elemento 
                    que queremos añadir, que por defecto se añade al
                    final del todo 
                    si queremos añadirlo al principio, tenemos que usar 
                    otra funcion llamada array_unshift()
                    En ambos podemos añadir los elementos que queramos 
                    siempre que los separemos mediante comas 
                </p>
            </li>
            <li><b>Eliminar elementos</b>
                <?php
                    echo "<br> funcion array_pop() <br>";
                    $b = ['a','b','c','d'];
                    echo "Primer ejemplo array original: <br> ";
                    print_r($b);
                    array_pop($b);
                    echo "<br> Segundo ejemplo borrando con pop la ultima posicion: <br> ";
                    print_r($b);
                    echo "<br> funcion array_shift() <br> ";
                    echo "Tercer ejemplo eliminando la primera posicion con shift: <br> ";
                    array_shift($b);
                    print_r($b);
                ?>
                <p>se debe referenciar el array del que queremos 
                    eliminar el elemento, con array_pop() eliminamos 
                    la ultima posicion de la lista, mientras que con 
                    array_shift() eliminamos la primera posicion 
                </p>
            </li>
            <li><b>Encontrar elementos</b>
                <?php
                    echo "<br> funcion array_search()";
                    echo "<br> array original: ";
                    $c = ['a' => 1, 'b' => 2, 'c' => 3 ];
                    print_r($c);
                    echo "<br> el valor 2 equivale a la clave: ";
                    echo array_search(2,$c);
                ?>
                <p>hemos creado un array asociativo
                    con claves y valores, y queremos encontrar 
                    a que clave equivale el valor 2, que en este 
                    caso nos devuelve la clave b 
                    si no fuera un array asociativo, nos devolveria 
                    la posicion del array en la que se encuentra el 
                    numero indicado 
                </p>
            </li>
            <li><b>Ordenar elementos</b>
                <?php
                    echo "<br> funcion sort()";
                    echo "<br> Array original: <br>";
                    $d = [4,5,2,8,1,6];
                    print_r($d);
                    echo "<br> Array ordenado ascendente con sort: <br>";
                    asort($d);
                    print_r($d);
                    echo "<br> Array ordenado descencente con asort: <br>";
                    arsort($d);
                    print_r($d);
                ?>
                <p>utlizamos la funcion asort para ordenar 
                    los valores numericos en orden ascendente 
                    en el caso de que sea un array asociativo 
                    es mejor usar la funcion arrray_multisort()
                    para ordenar en orden descendente es arsort()
                </p>
            </li>
            <li><b>Contar elementos</b>
                <?php
                    echo "<br> funcion count()";
                    echo "<br> Vamos a contar el array d: ";
                    echo count($d);
                ?>
                <p>en este caso en e array d habia 6 elementos </p>
            </li>
            <li><b>Maximo y minimo</b>
                <?php
                    echo "<br> funciones max() y min()";
                    echo "<br> el valor maximo de d es: " . max($d);
                    echo "<br> el valor minimo de d es: " . min($d);
                ?>
                <p>con la funcion max() podemos sacar cual es el valor 
                    mas alto del array indicado, mientras que con min() 
                    podemos sacar el valor mas pequeño 
                </p>
            </li>
        </ol>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
</body>
</html>
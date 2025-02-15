<!--1.	Nos interesa mantener un array con los nombre de los alumnos de 2º de DAW ordenados alfabéticamente 
(utiliza la función para mostrarlos ordenados). Y los mostraremos por pantalla. Debe de quedar algo así como. (es un ejemplo)
Alumnos matriculados en 2º DAW curso 2021/2022:
El número de alumnos matriculados en 2º DAW es: 23 alumnos
Blanca Pérez García
Mateo González Fernandez
Raúl Cantero Ruíz
-->
<?php
$alumnos = array(
    'Alejandro Gómez Ramírez',
    'Valeria Sánchez Torres',
    'Juan Pérez Castillo',
    'María López Fernández',
    'Carlos Fernández Morales',
    'Sofía Ramírez Martínez',
    'Diego Torres Vega',
    'Paula Castillo Cruz',
    'Javier Hernández Navarro',
    'Ana Morales Méndez',
    'Andrés Martínez Rojas',
    'Camila Vega Vargas',
    'Mateo Ortiz Álvarez',
    'Daniela Cruz Herrera',
    'Pablo Navarro Mendoza',
    'Lucía Méndez Serrano',
    'Santiago Rojas Domínguez',
    'Gabriela Vargas Paredes',
    'Nicolás Álvarez González',
    'Martina Herrera López',
    'Rodrigo Mendoza Gutiérrez',
    'Emma Serrano Díaz',
    'Luis Domínguez Núñez'
);

echo 'El número de alumnos matriculados en DAW es: ', count($alumnos);
echo '<br>'.'<br>';
sort($alumnos);
print_r($alumnos);
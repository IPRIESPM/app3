<?php

/*
    202calculos.php: Tras leer la edad de una persona, mostrar la edad que tendrá dentro de 10 años y hace 10 años. Además,
    muestra qué año será en cada uno de los casos. Finalmente,
    muestra el año de jubilación suponiendo que trabajarás hasta los 67 años. En este caso,
    no hace falta que previamente crees un formulario, puedes probar el ejercicio via URL: 202calculos.php?edad=33.202calculos.php:
    Tras leer la edad de una persona, mostrar la edad que tendrá dentro de 10 años y hace 10 años. Además,
    muestra qué año será en cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo que trabajarás hasta los 67 años.
    En este caso, no hace falta que previamente crees un formulario, puedes probar el ejercicio via URL: 202calculos.php?edad=33.202calculos.php:
    Tras leer la edad de una persona, mostrar la edad que tendrá dentro de 10 años y hace 10 años.
    Además, muestra qué año será en cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo que trabajarás hasta los 67 años.
    En este caso, no hace falta que previamente crees un formulario, puedes probar el ejercicio via URL: 202calculos.php?edad=33.
*/

$variable1=$_GET['numero1'];
$variable2=$_GET['numero2'];


echo "La suma de los valores es: ".($variable1+$variable2);
echo "<br>La resta de los valores es: ".($variable1-$variable2);
echo "<br>La multiplicacion de los valores es: ".($variable1*$variable2);
echo "<br>La división de los valores es: ".($variable1/$variable2);

?>
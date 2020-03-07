<?php

// Ejercicio 9
// Escribir un programa con php que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla.

$coleccion = array ();

for ($i=0; $i<120; $i++){
    array_push($coleccion,"jajajja");
}

// var_dump($coleccion);

//Si quiero ver solo el indice 45
echo $coleccion[45];
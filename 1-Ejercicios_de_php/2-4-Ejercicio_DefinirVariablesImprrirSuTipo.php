<?php

// Ejercicio 11
// Crear un script en php que tenga 4 variables, una de tipo array, otra string, otra int y otra booleana y que imprima un mensaje
// segun el tipo de variable que sea.


$array = [3,"uhuaha",7,9];
$otroArray=array(5,"sgdfdsgddfdg",9,4,6);
$string= "hola... jajajaj...";
$int= 123456789;
$booleana=true;

if(is_array($array)){
    echo "El  es un array";
    "</br>";
    echo "<hr/>";
}
    
if(is_array($otroArray)){
    echo "El es un array";
    "</br>";
    echo "<hr/>";
}

if(is_string($string)){
    echo "El $string es un string";
    "</br>";
    echo "<hr/>";
}

if(is_integer($int)){
    echo "El $int es un número";
    "</br>";
    echo "<hr/>";
}

if(is_bool($booleana)){
    echo "El $booleana es un booleano";
    "</br>";
    echo "<hr/>";
}


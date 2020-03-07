<?php

// Ejercicio 10
// Escribir un programa que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en miniscula y mostrarla en mayuscula y negrita.

$variable = "";

if(empty($variable)){ //Esta funcion verifica si esta vacia o no la variable
    $variable="estoy rellenota";
    $variableMayus= strtoupper($variable);//Esta funcion la hace mayuscula
    echo "<strong>$variableMayus</strong>";
}else{
    echo "ya estaba rellena hace muuuchooo tiempo atras $variable";
};
<?php

// Ej 4. Mostrar las funciones de una calculadora sobre los numeros enviados por GET

if(isset($_GET["numero1"]) && isset($_GET["numero2"] )){
    
    $numero1= $_GET["numero1"];
    $numero2= $_GET["numero2"];

    echo "<h1> Calculadora <h1/>";
    echo "<hr/>";
    echo "Sumas: ".($numero1+$numero2)."<br/>";
    echo "Resta: ".($numero1-$numero2)."<br/>";
    echo "Multiplicacion: ".($numero1*$numero2)."<br/>";
    echo "Division: ".($numero1/$numero2)."<br/>";
}else{
    echo "<h1> Introduce correctament los valores por la URL </h1>";
}
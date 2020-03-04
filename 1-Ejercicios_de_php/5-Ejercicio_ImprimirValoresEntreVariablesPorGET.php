<?php

// Ej 5. Hay que imprimir todos los valores que esten entre un numero y otro que se pasan por GET 

if(isset($_GET["numero1"])&&(isset($_GET["numero2"]))){
    
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    $i=$numero1 + 1;
    if($numero1<$numero2){
        while($i<$numero2){
            echo $i . "<br/>";
            $i++;
        }
    }else{
            echo "El numero 1 debe ser menor al numero 2";

        }
}
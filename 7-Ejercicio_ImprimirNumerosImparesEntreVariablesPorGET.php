<?php

// Ej 7. Hay que imprimir todos los numeros IMPARES que esten entre un numero y otro que se pasan por GET 

if(isset($_GET["numero1"])&&(isset($_GET["numero2"]))){
    
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    $i=$numero1 + 1;
    if($numero1<$numero2){
        while($i<$numero2){
            if($i%2 != 0){
                echo $i . " Es Impar <br/>";
            }else{
                echo $i . " Es par <br/>";
            }
            $i++;
        }
    }else{
            echo "El numero 1 debe ser menor al numero 2";

        }
}
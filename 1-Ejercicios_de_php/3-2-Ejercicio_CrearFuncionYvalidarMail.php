<?php

//Ejercicio 3-2
// 1- crear una funcion
// validar el mail con filter_var
// recoger la variable por get y validarla
// Mostrar el resultado

function validarEmail($email){
    $status="No valido";
    if(!empty($email) && filter_var($-<, FILTER_VALIDATE_EMAIL)){
        $status="Valido";
    }
    return $status;
}    

if(isset($_GET["email"])){
    echo  validarEmail($_GET["email"]);
}else{
    echo "Pasa por la url un mail";
}
<?php

// Ejercicio 3-3 hacer una interfaz de usuario  (formulario) con 2 imputs y 4 botones
// uno para sumar, restar, dividir y multiplicar.

function Suma($numero1,$numero2){
    
    $resultado=$numero1+$numero2;

    return $resultado;
}

if(isset($_post["n1"]) && isset($_post["n2"])){
    
}
?>

<!doctype html>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Número 1 </label>
            <input type="number" name="n1">

            <label for="n2">Número 2</label>
            <input type="number" name="n2">

            <br>
            <br>
            <input type="submit" name="sumar" value="Sumar">
            <input type="submit" name="restar" value="Restar">
            <input type="submit" name="dividir" value="Dividir">
            <input type="submit" name="multiplicar" value="Multiplicar">
            
        </form>

        <?php ?>
    </body>
</html>

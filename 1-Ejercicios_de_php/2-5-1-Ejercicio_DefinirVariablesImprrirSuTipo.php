<?php

// Ejercicio 2-5.
// Crear un Array con el contenido de la tabla.
// ACCION   AVENTURA        DEPORTES
//  GTA      ASSASINS       FIFA 19
//  COD     PRINCE OF PERC   MOTO GP 19

//Cada columna en un fichero separado


$ArrayJuegos= array(
    "ACCION"=> array( "GTA", "COD", "PUGB"),
    "AVENTURA" => array("assains", "crush", "Prince of persia"),
    "DEPORTES" => array("fifa 19","pes 19", "moto gp 19")
);

$indicesArray=array_keys($ArrayJuegos);
?>

<table border="1">
    <?php require_once "2-5-A-Ejercicio_DefinirVariablesImprrirSuTipo.php";?>
    <?php require_once "2-5-B-Ejercicio_DefinirVariablesImprrirSuTipo.php";?>
    <?php require_once "2-5-C-Ejercicio_DefinirVariablesImprrirSuTipo.php";?>
    <?php require_once "2-5-D-Ejercicio_DefinirVariablesImprrirSuTipo.php";?>
</table>
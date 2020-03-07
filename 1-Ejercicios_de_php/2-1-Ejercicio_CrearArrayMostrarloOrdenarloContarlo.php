<?php

// Ej 8. Hacer un array de 8 elementos:
// 1- recorrerlo y mostrarlo,  
// 2- ordenarlo y mostrarlo,
// 3- mostrar su longitud,
// 4- Buscar algún elemento.

//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>

//1-

echo  "<h1> Ejercicio 1 </h1>";

$Arrays = [1, 6, 15, 8 , 9, 22, 48 , 1252];
$OtroArray = array (1,2,3,4,5,6,7,8); // no se esta usando en ningun lado, solo es para mostrar las dos formas de crear un array.

echo "<h1>Recorrer y mostrar un array con un foreach</h1>" ."<br/>";
foreach($Arrays as $UnArray){
    echo "Elemento del Array: ". $UnArray."<br/>";
    
}

echo "<hr>";

//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>


//2-

echo  "<h1> Ejercicio 2 </h1>";

echo "<h1>Ordenarlo y mostrarlo</h1>" . "<br/>";

sort($Arrays);

//var_dump($Arrays);

//Hay que hacer un foreach igual que el paso anterior para recorrer y mostrar los elementos del array, por eso es conveniente crear una funcion con ese lenguaje y no hacer todo el tiempo,

function RecorrerArray($Arrays){
    $resultado=""; //Se crea una variable vacia.

    foreach($Arrays as $UnArray){
        //$resultado = $resultado.$Arrays."<br/>";
        $resultado .= $UnArray."<br/>"; 
    }   

    return $resultado;
};
   
echo RecorrerArray($Arrays);

echo "<br/>";
echo "<hr/>";

//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>

//3-

echo  "<h1> Ejercicio 3 </h1>";

// Mostrar la longitud del Array

echo "<h1>Número total de elementos</h1>" . "<br/>";

echo count($Arrays);

echo "<hr/>";
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>

//4-

echo  "<h1> Ejercicio 4 </h1>";

//Busqueda en el Array

//Creamos una variable para que almacene el elemento que se desea buscar.

$busqueda = 8;

echo "<h1>Buscar el número: ".$busqueda." en el Array e informar si se encuentra o no</h1>" . "<br/>";

$search= array_search($busqueda, $Arrays); //Esta funcion me devuelve el indice en el cual se ubica el elemento buscado.

//Si $search no esta vacio que me traiga el dato y el indice.
if(!empty($search)){
    echo "<h3>El número: ".$busqueda." existe en el array y esta en el índice $search</h3>";
}else{
    echo "<h3>El número: ".$busqueda." NOOOOO existe en el array</h3>";
}

echo "<hr/>";

//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>
//<------------------------------------------------------------------------------------------------------->>

//4-B 
//Buscar por un parametro enviado por URL

echo  "<h1> Ejercicio 4B </h1>";

if(isset($_GET['numero'])){

    $busqueda = $_GET['numero'];

    echo "<h1>Buscar el número: ".$busqueda." en el Array e informar si se encuentra o no</h1>" . "<br/>";

    $search= array_search($busqueda, $Arrays); //Esta funcion me devuelve el indice en el cual se ubica el elemento buscado.

//Si $search no esta vacio que me traiga el dato y el indice.
    if(!empty($search)){
        echo "<h3>El número: ".$busqueda." existe en el array y esta en el índice $search</h3>";
    }else{
        echo "<h3>El número: ".$busqueda." NOOOOO existe en el array</h3>";
    }
}
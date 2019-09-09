<?php

//Conversion de anumeros enteros

//contexto

$variable="20.8 hola mundo";
$suma= 20 +$variable;



//forzado de tipo
$int=(int)$variable;


// funcion

$funcion=intval($variable);
echo $funcion;
echo $int;
echo $suma;
echo gettype($suma);


//Conversion a numeros tipo float

$numReal=(float)$variable;
echo $numReal;
echo gettype($numReal);

// funcion

$funcionReal=floatval($variable);
echo $funcionReal;
echo gettype($funcionReal);

//Conversion Boolean

$boolean=(boolean)$variable;
$bool=boolval($variable);

echo $boolean;

//Convertir a tipo array
//funcion explode
$numeros="1,2,3,4";
$arrayNumeros= explode(",",$numeros,5);
echo $arrayNumeros[0];

// tipo forzado

$array=(array)$variable;
echo $array[0];

$arrayColores= array('azul','rojo','morado');

$string=implode(" ",$arrayColores);

echo $string;



 ?>

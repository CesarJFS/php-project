<?php
//Operadores de comparacion

//Operador ==
$numero1=13;
$numero2="13";

echo "Hola soy el operador igual == \n </br>";

var_dump($numero1==$numero2);

//Operador identico

echo "Hola soy el operador identico === \n </br>";

var_dump($numero1===$numero2);

//Operador diferente

echo "Hola soy el operador diferente != 0 <> </br>";

var_dump($numero1!=$numero2);

//Operador no trader_cdlidentical3crows

echo "Hola soy el operador diferente !== 0 <> </br>";

var_dump($numero1!==$numero2);

//Operador nave espacial <=>
$a=5;
$b=4;

echo "hola soy el operador de nave espacial <=> </br>";

var_dump($a<=>$b);// 1 primera variable es mayor a la segunda
var_dump($b<=>$a);//-1 la segunda es mayor al primero
var_dump($b<=>$b);// 0 las dos son iguales

//Operador Elvis

$result=true;

echo "Hola soy el operador elvis ?: </br>";
var_dump($result?:'no hay datos');

//Operador ternario
echo "Hola soy el operador ternario ?: </br>";
var_dump($result?'Soy verdadero':'soy falso');

//operador de fusion null
//es igual al elvis solo que si la variable no esta
//definida este soltara la segunda opcion y el elvis
//necesitara de la funcion isset()
echo "Hola soy el operador fusion null ?? </br>";
var_dump($result??'no hay datos');
 ?>

<?php

//Comillas dobles
//Concatenacion
//Forma 1
$palabra="Codigo Facilito ";

$union=$palabra . "Tutorial";
//Forma 2

$palabra .="Tutorial 2";

//Interpolacion es mejor para el rendimiento

//Forma 1

echo "Bienvedno a $palabra adios";
//forma 2
echo "Bienvedno a {$palabra} adios";

//Caracteres escapados
/*
\n

*/

echo " <h1>Hola Mundo \n adios</h1>";
echo '<pre>'."hola soy el operador igual ==\n" . '
 </pre>';

//Comillas simples
//No interpolacion
//echo '$palabra hola';

echo '\n Hola ';

echo 'I\'m';

echo 'Mi directorio es D:\\hola';


 ?>

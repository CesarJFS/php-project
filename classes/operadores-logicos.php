<?php

//operador logico xor
// es como el or || pero si los dos dan verdadero tira falso
$a=(15==15) xor (5==15);
var_dump($a);

$b=(15==15)or (5==15);
var_dump($b);
$c=(15==15)|| (5==15);
var_dump($c);

 ?>

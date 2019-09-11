<?php
$array=array(1,2,3,4,5);

/*foreach($array as $valor):
  echo $valor."</br>";
endforeach;

foreach(array(1,2,3,4,5) as $valor):
  echo $valor."</br>";
endforeach;*/

foreach($array as &$valor):
   $valor*=2;
endforeach;
echo $array[4];
foreach($array as $clave => $valor2):
  echo "$clave.......$valor2</br>";
endforeach;


 ?>

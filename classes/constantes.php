
<?php
//constantes
const CONSTANTE='SOY UNA CONSTANTE';
// no se pueden re-definir

const NUMEROS=1;
const COLORES=array('amarillo','azul','rojo' );
echo NUMEROS;
echo CONSTANTE;
echo COLORES[1];

define('CONSTANTE2',"Hola Mundo");

echo CONSTANTE2;
define('COLORES2',array('amarillo','verde','morado'));
echo COLORES2[2];

echo PHP_FLOAT_DIG;


 ?>

<?php


echo "<p>
Hola Mundo
</p>";


$contador=1;
$integre=1;
$floar=1.5;
$isTrue=true;
$arrayColores = array('Azul','morado','negro' );
$string="hola";

echo $contador;
echo $integre;
echo $floar;
echo $isTrue;

function variablesGlobales()
{
    $local="soy la variable local we";
    echo $GLOBALS["global"];
    echo $local;
}
$global="Soy la variable global";
variablesGlobales();
?>

<?php
echo "<br/>";
echo "Ejercicio8";
echo "<br/>";

$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']='mundo';

foreach($v as $k=> $valor){
    echo $k ," ",  $valor;
    echo "<br/>";
}

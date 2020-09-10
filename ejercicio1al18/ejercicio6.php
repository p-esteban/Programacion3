<?php
echo "Ejercicio6";
echo "<br/>";

$array = array();

do{
    array_push($array, rand(0,10) );
}while(sizeof($array)<5);

//var_dump($array);

$promedio = array_sum($array)/count($array);

if($promedio>6){
    echo "promedio: $promedio mayor que 6";
}else if($promedio<6){
    echo "promedio: $promedio menor a 6";
}else{
    echo "promedio: $promedio igual a 6";
}

//echo $promedio;
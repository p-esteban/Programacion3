<?php
echo "<br/>";
echo "Ejercicio7";
echo "<br/>";

$array = array();
$num = 1;

do{
    if(!($num%2==0)){
        array_push($array,$num);
    }
    $num++;

}while(sizeof($array)<10);
//var_dump($array);

for($i=0; $i<sizeof($array); $i++){
    echo $array[$i];
    echo "<br/>";
}
$aux = 0;
while($aux < sizeof($array)){
    echo $array[$aux];
    echo "<br/>";
    $aux++;
}
foreach($array as $valor){
    echo $valor;
    echo "<br/>";
}
<?php
echo "<br/>";
echo "Ejercicio3";
echo "<br/>";

$a = rand(0,100);
$b = rand(0,100);
$c = rand(0,100);

echo "a: ", $a, "b: ",$b,"c: ", $c;
echo "<br>";
if ($a < $b && $a > $c || $a < $c && $a > $b ) {
    echo "valor del medio", $a;
}else if ($b < $a && $b > $c || $b < $c && $b > $a  ){
    echo "valor del medio", $b;
}else if ($c < $a &&   $c > $b || $c < $b && $c > $a ){
    echo "valor del medio", $c;
}else{
    echo "no hay numero del medio";
}
echo "<br>";
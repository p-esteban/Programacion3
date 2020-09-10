<?php

echo "<br/>";
echo "Ejercicio2";
echo "<br/>";


$d = new DateTime();

echo $d->format('d-m-y');


switch ($d->format('m')) {
    case '01':
    case '02':
        echo "verano";
        break;
    case '03':
        if ($d->format('d')<22) {
            echo "verano";
        }else{
            echo "otoño";
        }
    break;
    case '04':
    case '05':
        echo "otoño";
        break;
    case '06':
        if ($d->format('d')<22) {
            echo "otoño";
        }else{
            echo "invierno";
        }
        break;
    case '07':
    case '08':
        echo "invierno";
        break;
    case '09':
        if ($d->format('d')<22) {
            echo "invierno";
        }else{
            echo "primavera";
        }
        break;
    case '10':
    case '11':
        echo "primavera";
        break;
    case '12':
        if ($d->format('d')<22) {
            echo "primavera";
        }else{
            echo "verano";
        }
        break;
 
} 
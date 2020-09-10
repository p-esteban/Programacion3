<?php

echo "<br/>";
echo "Ejercicio13";
echo "<br/>";

function Validar ($palabra,$max){
    $palabra = strtolower($palabra);

    $palabra = ucfirst($palabra);
    
    $palabraValida =  array("Recuperatorio","Parcial","Programacion");
    if (strlen($palabra)<=$max &&  in_array($palabra,$palabraValida)) {
      return 1;
    }
    return 0;
}
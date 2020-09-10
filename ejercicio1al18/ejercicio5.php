<?php

echo "<br/>";
echo "Ejercicio5";
echo "<br/>";


$formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);
echo $formatterES->format(123.45);
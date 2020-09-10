<?php
echo "EJERCICIOS";
echo "<br/>";
/*
$num = 0;
$suma =0;
$cont =0;
do{

$suma += $num++;
$cont++;
echo $num;
echo "<br/>";

}while($suma < 1000);
echo "total de numero sumados ", $cont;

echo "EJERCICIO 6";
echo "<br/>"; */


//include_once "./ejercicio5.php";

/* include_once "./ejercicio2.php";
include_once "./ejercicio3.php";

include_once "./ejercicio6.php";
include_once "./ejercicio7.php";
include_once "./ejercicio8.php"; 
include_once "./ejercicio12.php"; 

include_once "./ejercicio13.php";

echo Validar("parcial",15);



include_once "./ejercicio14.php";

echo "par: ", esPar(3);
echo "impar: ", esImpar(3);


include_once "./ejercicio15.php";

$rec1 = new Rectangulo(3,5);

echo $rec1->Dibujar();
*/

include_once "./ejercicio17.php";

$a1 = new Auto("Fiat","rojo");
$a2 = new Auto("Fiat","azul");
$a3 = new Auto("Toyota","verde",200500);
$a4 = new Auto("Toyota","verde",300000);
$a5 = new Auto("Ford","amrillo",500000,"01-01-2001");

$a3->AgregarImpuestos(1500);
$a4->AgregarImpuestos(1500);
$a5->AgregarImpuestos(1500);

echo "Ejercicio 17";
echo "<br/>";

echo "SUMA";
echo "<br/>";
echo Auto::Add($a1,$a2);
echo "<br/>";
echo "Comparacion 1 con 2";
echo "<br/>";
echo $a1->Equals($a2);
echo "<br/>";
echo "Comparacion 1 con 5";
echo "<br/>";
echo $a1->Equals($a5);


echo "mostrar impares";
echo "<br/>";
echo Auto::MostrarAuto($a1);
echo "<br/>";
echo Auto::MostrarAuto($a3);
echo "<br/>";
echo Auto::MostrarAuto($a5);



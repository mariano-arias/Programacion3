<?php
/*
Arias Mariano
Aplicación Nº 18 (Auto - Garage)*/
include "Garage.php";

$auto1 = new Auto ("Fiat", "rojo");
$auto2 = new Auto ("Renault", "azul");
$auto3 = new Auto ("Suzuki", "gris", 9800);
$auto4 = new Auto ("Renault", "amarillo");
$auto5 = new Auto ("Ford", "verde", 1655);

Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto2);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto4);
Auto::MostrarAuto($auto5);

$garage = new Garage ("UTN SRL");

if($garage->Add($auto1)){
    echo "<br>Se ingresó el auto al garage.<br>";
};
// repito operacion con mismo auto
$garage->Add($auto1);

$garage->Add($auto2);
$garage->Add($auto3);
$garage->Add($auto4);

//var_dump($garage);

//elimino auto no ingresado
$garage->Remove($auto5);

//elimino auto ingresado
if($garage->Remove($auto2)){
    echo "<br>Auto eliminado de garage";
};


?>
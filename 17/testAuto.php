<?php
/* Arias Mariano
Aplicación Nº 17 (Auto)
Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares.*/

include "Auto.php";

$car1 =  new Auto("fiat", "amarillo");
$car2 =  new Auto("fiat", "azul");

$car3 =  new Auto("suzuki", "gris", 1500);
$car4 =  new Auto("suzuki", "gris", 2345);

$fecha = date_create('2021-08-23');


$car5 = new Auto ("renault", "rojo", 5500, $fecha);


$car3->AgregarImpuestos(1500);
$car4->AgregarImpuestos(1500);
$car5->AgregarImpuestos(1500);

//var_dump($car5);

echo "<br>Valor: ".Auto::Add($car1, $car2)."<br>";

if($car1->Equals($car2)){
    echo "Auto 1 y Auto 2 son iguales<br>";
}else{
    echo " Los autos no son iguales<br>";
}

if($car1->Equals($car5)){
    echo "Auto 1 y Auto 5 son iguales<br>";
}else{
    echo "Los autos no son iguales<br>";
}

Auto::MostrarAuto($car1);
Auto::MostrarAuto($car3);
Auto::MostrarAuto($car5);

?>
<?php
/*
Arias Mariano

Aplicaci�n No 1 (Sumar n�meros)
Confeccionar un programa que sume todos los n�meros enteros desde 1 mientras la suma no
supere a 1000. Mostrar los n�meros sumados y al finalizar el proceso indicar cuantos n�meros
se sumaron.*/

echo "Aplicacion N°1";
echo "<br>";
echo "Numero sumados: ";
$num=1;
$suma=0;
$contador=0;

do
{  
    echo($num);
    $suma += $num;
    $num++;
    $contador++;
    echo ", ";
   
}while($suma+$num  <= 1000);
echo "<br>";
echo "Suma = ".$suma;
echo "<br>";
echo "Se sumaron ".($contador)." numeros.";
?>
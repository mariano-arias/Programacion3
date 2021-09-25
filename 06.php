<?php
/*
Arias Mariano
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

$numeros = array(
  rand(0,10),
  rand(0,10),
  rand(0,10),
  rand(0,10),
  rand(0,10)
);

$suma=0;

var_dump($numeros);
echo "<br>";
foreach($numeros as $value){
 $suma += $value;
}
if($suma/5<6){
 echo "El promedio de los numeros es menor a 6";
}else if($suma==6){
  echo "El promedio de los numeros es igual a 6";
}else{
  echo "El promedio de los numeros es mayor a 6";
}
?>
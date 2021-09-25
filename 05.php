<?php
/*
Arias Mariano

Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.*/

echo "Ejercicio N° 5 </br>";

$num = random_int(20,60);
echo "Numero: ".$num. "  =>>>  ";
$aux= $num/10;
$decena=(int)$aux;
$unidad=$num%10;

switch ($decena) 
{
  case 2:
    if($unidad==0){
      echo "Veinte";
    }else{
    echo "Veinti";
    unidad($unidad);
    }
    break;
  case 3:
    if($unidad==0){
      echo "Treinta";
    }else{
      echo "Treinta";
      echo " y ";
      unidad($unidad);
    }
    break;
  case 4:
    if($unidad==0){
    echo "Cuarenta";
    }else{
      echo "Cuarenta";
      echo " y ";
      unidad($unidad);
    }
    break;
  case 5:
    if($unidad==0){
    echo "Cincuenta";
    }else{
      echo "Cincuenta";
      echo " y ";
      unidad($unidad);
    }
    break;
  case 6:
      echo "Sesenta";
    break;
    
}

function unidad($unidad)
{
  switch ($unidad) {
    case 1:
      echo "uno";
      break;
    case 2:
      echo "dos";
      break;
    case 3:
      echo "tres";
      break;
    case 4:
      echo "cuatro";
      break;
    case 5:
      echo "cinco";
      break;
    case 6:
      echo "seis";
      break;
    case 7:
      echo "siete";
      break;
    case 8:
      echo "ocho";
      break;
    case 9:
      echo "nueve";
      break;
  }
}
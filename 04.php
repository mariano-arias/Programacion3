<?php
/*
Arias Mariano
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/


$operador;
$resultado;
$op1 = random_int(0,100);
$op2= random_int(0,100);
$flag=true;

$operacion = random_int(1,4);

switch($operacion){
    case 1:
        $operador = "+";
        break;
    case 2:
        $operador = "-";
        break;
    case 3:
        $operador = "*";
        break;
    case 4:
        $operador= "/";
}

switch($operador){
    case "+":
        $resultado= $op1+$op2;
    break;
  case "-":
        $resultado= $op1-$op2;
    break;
  case "*":
        $resultado= $op1*$op2;
    break;
  default:
    if($op2 != 0){
      $resultado= $op1 / $op2;
    }else{
      echo "No se puede dividir por 0<br>";
    }
}
echo "La operacion realizada es ".$op1." "."$operador"." ".$op2." = ".$resultado;

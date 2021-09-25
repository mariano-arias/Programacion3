<?php
/*
Arias Mariano

Aplicacion No 2 (Mostrar fecha y estaci�n)
Obtenga la fecha actual del servidor (funci�n date) y luego impr�mala dentro de la p�gina con
distintos formatos (seleccione los formatos que m�s le guste). Adem�s indicar que estaci�n del
a�o es. Utilizar una estructura selectiva m�ltiple.*/

echo "Ejercicio N° 2 </br>";

date_default_timezone_set('America/Los_Angeles');

echo "La fecha es ".date('d/m/y')."</br>";
echo "La fecha es ".date('D-M-Y')."</br>";
echo "Hoy es " . date('l jS \of F Y')."</br>";

echo "<br>";

switch((int)date('m'))
{
  case 1:
  case 2:
    echo "Estamos en Verano";
    break;
  case 3:
    if(date('d')<21){
      echo "Estamos en Verano";
      break;
    }else{
      echo "Estamos en Otoño";
      break;
    }
    case 4:
    case 5:
      echo "Estamos en Otoño";
      break;
    case 6:
          if(date('d')<21){
            echo "Estamos en Otoño";
            break;
          }else{
            echo "Estamos en Invierno";
            break;
          }
    case 7:
    case 8:
      echo "Estamos en Invierno";
      break;
    case 9:
          if(date('d')<21){
            echo "Estamos en Invierno";
            break;
          }else{
            echo "Estamos en Primavera";
            break;
          }
    case 10:
    case 11:
      echo "Estamos en Primavera";
      break;
    case 12:
          if(date('d')>21){
            echo "Estamos en Verano";
            break;
          }else{
            echo "Estamos en Primavera";
            break;
          }
}
?>
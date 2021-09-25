<?php
/*
Arias Mariano
Aplicación Nº 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario
*/

$palabra = "Programacion";

if(Validar($palabra,15)){
  echo "La palabra cumple las condiciones";
}
else
{
  echo "La palabra no cumple las condiciones";
}

function Validar($palabra, $max)
{
  $list = ["Recuperatorio", "Parcial", "Programacion"];

  if((strlen($palabra)<=$max))
  {
    if(in_array($palabra, $list))
    {
      return 1;
    }
  }
    return 0;
}
?>

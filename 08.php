<?php
/*
Arias MAriano
Aplicación Nº 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';
*/

   // $array = [1 => 90, 30 => 3, 'e' => 99, 'hola' => 'mundo'];

   $array[1]=90;
   $array[30]=3;
   $array['e']=99;
   $array['hola']='mundo';

    foreach ($array as $key => $value)
    {
        echo "Clave: $key - Valor: $value <br>";
    }
?>
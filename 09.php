<?php
/*
Arias Mariano
Aplicación Nº 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras
*/


$lapiceraA['color']= 'Negra';
$lapiceraA['trazo'] = 'fino';
$lapiceraA['marca'] = 'Bic';
$lapiceraA['precio'] = '50';

$lapiceraB['color']= 'Rojo';
$lapiceraB['trazo'] = 'fino';
$lapiceraB['marca'] = 'Faber';
$lapiceraB['precio'] = '65';

$lapiceraC['color']= 'Verde';
$lapiceraC['trazo'] = 'medio';
$lapiceraC['marca'] = 'Sony';
$lapiceraC['precio'] = '75';

$arrLapiceras = [$lapiceraA, $lapiceraB, $lapiceraC];
$i=0;
foreach ($arrLapiceras as $val){
  $i++;
echo '<br>Lapicera '.$i.': <br>';
  foreach ($val as $v=>$value){
    echo $v.': '.$value.', ';
  }
}
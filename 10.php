<?php
/*
Arias Mariano
Aplicación Nº 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Array*/



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

$arrayIndex = [$lapiceraA, $lapiceraB, $lapiceraC];
$i=0;
foreach ($arrayIndex as $val){
  $i++;
echo '<br>Lapicera '.$i.': <br>';
  foreach ($val as $v=>$value){
    echo $v.': '.$value.', ';
  }
}

echo "<br><br>";
$arrayAsoc = array();
$arrayAsoc['one'] = $lapiceraA;
$arrayAsoc['two'] = $lapiceraB;
$arrayAsoc['three'] = $lapiceraC;


foreach ($arrayAsoc as $key=>$val){
    echo '<br>Lapicera '.$key.': <br>';
    foreach ($val as $v=>$value){
        
      echo $v.': '.$value.', ';
    }
  }

?>
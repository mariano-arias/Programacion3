<?php
/*
Arias Mariano
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/

$impares = array();

$cantidad=0;
$numero=0;

while (count($impares) < 10) {
  if ($numero % 2 != 0) {
    $impares[] = $numero;
  }
  $numero++;
  $cantidad++;
}

echo "Primeros 10 números impares:<br>";
echo "Utilizando estructura for:<br>";
for ($i = 0; $i < count($impares); $i++) {
  echo $impares[$i];
  echo "<br>";
}

echo "Utilizando estructura while:<br>";
$i = 0;
while ($i < count($impares)) {
  echo $impares[$i];
  echo "</br>";
  $i++;
}
echo "Utilizando estructura foreach:<br>";
foreach ($impares as $value) {
  echo $value;
  echo "</br>";
}
?>
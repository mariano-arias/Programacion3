<?php
/* Arias Mariano
Aplicación Nº 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
*/

$array = ["h","o","l","a"];


function invertir ($var){

    $aux = array_reverse($var);

    foreach($aux as $key=>$value){
        echo $value;
    }
}

invertir($array);

?>

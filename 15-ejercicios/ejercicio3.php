<?php

/* 
 * comprobar si una variable está vacia, y si lo está, rellenarla con texto en
 * minusculas y mostrarlo en mayúsculas y en negrita
 */

$string = "";

if(empty($string)){
    $string = "hola josé eres waton pero eres mi amigo tkm";
    $stringMAYUS = mb_strtoupper($string);
    echo "<strong>$stringMAYUS</strong>";
}else{
    echo "la variable ya tiene algo";
}
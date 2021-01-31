<?php

/* 
 * crear 4 variables: 1 array, 1 string, 1 int y 1 bool
 * imprimir un mensaje segun el tipo de variable que sea
 */

$matriz = array("Hola", 88);
$titulo = "Cantantes";
$numero = 69;
$bool = true;

if(is_array($matriz)){
    echo "<h1>La variable es array</h1>";
}

if(is_string($titulo)){
    echo "<h1>$titulo</h1>";
}

if(is_integer($numero)){
    echo "<h1>$numero</h1>";
}

if(is_bool($bool)){
    echo "<h1>el bool es veraddero.</h1>";
}
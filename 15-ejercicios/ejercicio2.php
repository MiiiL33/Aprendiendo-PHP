<?php

/* 
 * Añadir valores a un array mientras que su longitud sea menor a 120
 * y luego mostrar por pantalla
 */

$arreglo = array();

while(count($arreglo)<120){
    array_push($arreglo, rand(1, 120));
}

foreach($arreglo as $numero){
    echo "$numero ";
}

echo "<h2>Total de elementos en el arreglo: ".count($arreglo).'</h2>';
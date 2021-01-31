<?php

/* 
 * Ejercicio: array con 8 numeros enteros, debe hacer lo siguiente:
 * 1.- recorrerlo y mostrarlo
 * 2.- ordenarlo y mostrarlo
 * 3.- mostrar su longitud
 * 4.- buscar elemento
 */

$ejercicio = array(69,420,666,81,90,33,115,3);

function recorrerYMostrar($arreglo){
    echo "<h1>Recorriendo y mostrando</h1>";
    foreach ($arreglo as $elemento){
        echo "$elemento ";
    }
    echo "<hr>";
}

function ordenarYMostrar($arreglo){
    echo "<h1>Ordenando y mostrando</h1>";
    sort($arreglo);
    foreach ($arreglo as $elemento){
        echo "$elemento ";
    }
    echo "<hr>";
}

function mostrarLongitud($arreglo){
    echo "<h1>Mostrando Longitud</h1>";
    echo count($arreglo);
    echo "<hr>";
}

function buscarElemento($arreglo){
    echo "<h1>Buscando elemento</h1>";
    if(isset($_GET['elemento'])){
        //cambiando tipo de dato
        $busqueda = (int) $_GET['elemento'];
        $posicion = array_search($busqueda, $arreglo);
        if(!empty($posicion)){
            echo "Existe el número en el array en la posición $posicion<hr>";
        }
    }else{
        echo 'No se ha asignado algo a encontrar<hr>';
    }
}

echo recorrerYMostrar($ejercicio);
echo ordenarYMostrar($ejercicio);
echo mostrarLongitud($ejercicio);
echo buscarElemento($ejercicio);
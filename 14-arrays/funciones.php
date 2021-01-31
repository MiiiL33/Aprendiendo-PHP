<?php

$cantantes = ['2pac', 'Serj Tankian', 'Daniel Tompkins'];
var_dump($cantantes);

//asort: ordenar el array de manera alfabética
asort($cantantes);
var_dump($cantantes);

//arsort: ordenar el array de manera alfabética inversa
arsort($cantantes);
var_dump($cantantes);

//sort: ordenar el array de manera numerica
sort($cantantes);
var_dump($cantantes);

$numeros = [1,2,3,6,1,7,2,0,3534,1,313,5];
var_dump($numeros);
sort($numeros);
var_dump($numeros);

echo '<hr><h1>agregar elementos a arrays</h1>';
$cantantes[] = 'Spencer Sotelo';
var_dump($cantantes);
//otra forma
array_push($cantantes, 'Jonathan Davis');
var_dump($cantantes);


echo '<hr><h1>quitar elementos de array</h1>';
array_pop($cantantes); //quita el último elemento del array
var_dump($cantantes);

unset($cantantes[2]);
var_dump($cantantes);

echo '<hr><h1>obtener elemento al azar</h1>';
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo '<hr><h1>mostrar array de forma inversa</h1>';
var_dump(array_reverse($numeros));


echo '<hr><h1>buscar dentro de un array</h1>';
$resultado1 = array_search('Drake', $cantantes);
$resultado2 = array_search('Daniel Tompkins', $cantantes);
var_dump($resultado1);
var_dump($resultado2);

echo '<hr><h1>Contando elementos en array</h1>';
echo count($cantantes).'<br>';
echo sizeof($cantantes);
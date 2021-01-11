<?php

//existen int, float, double, string, bool, null, array o vectores y objetos
$int = 100; //la variable se llama int
$float = 22.2; //la variable se llama float
$string = "soy texto $int"; //la variable se llama string
$bool = true; //la variable se llama bool
$null = NULL; //la variable se llama null

echo $int;
echo '<br> variable de tipo: '.gettype($int);
echo "concatenando la variable int con la variable float: $int y $float"; //las comillas dobles tarda un poquito mas en procesar
echo '<br>con comilla simple, no detecta variables: $int y $float\n';
echo "<hr/>";
///////////////////////////
echo $float;
echo '<br>variable:'.gettype($float);
echo "<hr/>";
///////////////////////////
echo $string;
echo '<br>variable: '.gettype($string);
echo "<hr/>";
///////////////////////////
echo $bool;
echo '<br>variable: '.gettype($bool);
echo "<hr/>";
///////////////////////////
echo $null;
echo '<br>variable: '.gettype($null);
echo "<hr/>";


?>
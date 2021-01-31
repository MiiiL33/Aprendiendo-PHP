<?php

//debuggear
$nombre = "María";
var_dump($nombre);

//fechas
echo date('d-m-Y').'<br>'; //puedes sacar formatos de fechas para mostrar
echo time().'<br>';

//matemáticas
echo "Raiz cuadrada de 9: ".sqrt(9).'<br>';
echo "número aleatorio entre 1 y 20: ".rand(1, 20).'<br>'; //sin parametros arroja cualquier número aleatorio
echo "número pi: ".pi().'<br>';
echo 'redondear 2.4535 hacia abajo: '.round(2.4535234,3).'<br>'; //el 2do parámetro indica la cantidad de cifras a redondear
echo 'redondear 2.523 hacia arriba: '.round(2.52323423,3).'<hr>';

//detectar tipado
echo gettype($nombre).'<br>'; //retorna el tipo de dato de $nombre
if(is_string($nombre)){
    echo "esta variable es un string: $nombre<br>";
}
if(!is_float($nombre)){
    echo 'la variable \'nombre\' no es un número con decimales<hr>';
}
//comprobar si existe una variable
if(isset($edad)){
    echo 'la variable $edad existe<hr>';
}else{
    echo 'la variable $edad no existe<hr>';
}

//limpiar espacios
$frase = "       mi contenido de    la frase     ";
var_dump($frase);
var_dump(trim($frase));
echo '<hr>';

//eliminar variable
$year = 2020;
echo 'la variable $year existe aqui: '.$year.'<br>';
unset($year);
echo 'la variable $year no existe aqui, se muestra un error: '.$year.'<hr>';

//comprobar variable vacía
$texto = "     probando probando 1 2 3   ";

if(empty(trim($texto))){
    echo "la variable texto está vacia<hr>";
}else{
    echo "la variable texto no está vacía: $texto<hr>";
}

//contar caracteres de un string
$cadena_prueba = "probando probando as fdasdfjaksdlf jalskdjf la";
echo "largo de la cadena de prueba $cadena_prueba: ".strlen($cadena_prueba).'<hr>';

//detectar el primer caracter coincidente
$frase = "José waton wata watona";
echo "detectando 'wat' en \$frase $frase: ".strpos($frase, "wat").'<br>';

//reemplazar palabras
$frase = str_replace('wat', 'tet', $frase);
echo $frase.'<br>';

//mayusculas y minusculas
echo strtoupper($frase).'<br>'; //no convierte caracteres con tildes
echo mb_strtoupper($frase).'<br>';//si convierte caracteres con tildes, se le puede pasar un 2do parametro conteniendo el encoding
echo strtolower($frase).'<br>';
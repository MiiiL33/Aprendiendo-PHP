<?php

/* 
 * sintaxis de funcion:
 * function nombreDeFuncion($parametros){
 *  instrucciones
 * }
 */

function muestraNombres(){
    echo '<h1>Lista de watones: </h1>';
    echo "Ignacio Acevedo<br/>";
    echo "José Villavicencio<br/>";
    echo "Nicolás Arenas<br/>";
    echo "Paolo Urbina<br/>";
    echo "David Sanhueza<br/>";
    echo "Jean Pierre Agurto<br/>";
    echo "Hernán Gonzalez<hr/>";
}
function profesIndecentes(){
    echo '<h1>Lista de profesores indecentes: </h1>';
    echo "Jorge Morris<br/>";
    echo "Ricardo Corbinaud<br/>";
    echo "René Alzamora<br/>";
    echo "Andrés Carrillo<br/>";
    echo "Julio Fuentealba<br/>";
    echo "Andrés Aguila<br/>";
    echo "Leonardo Bravo<hr/>";
}
muestraNombres();
profesIndecentes();

function tabla($numero){
    echo "<h3>Tabla de multiplicar del número $numero</h3>";
    for($i=1; $i<=10; $i++){
        echo "$numero x $i = ".($i*$numero).'<br>';
    }
    echo "<hr>";
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para mostrar la tabla";
}

function calculadora($numero1, $numero2, $negrita = false){
    echo "numero 1: $numero1; numero 2: $numero2<br>";
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    $cadena_texto="";
    if($negrita != false){
        $cadena_texto.="<h1>";
    }
    $cadena_texto.="Suma: $suma<br>";
    $cadena_texto.="Resta: $resta<br>";
    $cadena_texto.="Multiplicación: $multi<br>";
    $cadena_texto.="División: $div<hr>";
    if($negrita != false){
        $cadena_texto.='</h1>';
    }
    return $cadena_texto;
}

echo calculadora(3,4);

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $nombre;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $apellidos;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
        . "</br>".
        getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("José", "Gay");
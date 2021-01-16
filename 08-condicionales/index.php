<?php

/*
 * operadores de comparación
 * == igual (ignora el tipo de dato)
 * === identico (toma en cuenta el tipo de dato)
 * != diferente (ignora el tipo de dato)
 * <> diferente (toma en cuenta el tipo de dato)
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 * 
 * operadores lógicos
 * && and
 * || or
 * ! not
 * 
 */

//ejemplo 1
$color = "verde";
if ($color=="rojo"){
    echo "el color es rojo<hr/>";
}
else{
    echo "el color no es rojo<hr/>";
}

//ejemplo 2
$year = 2020;
if($year==2021){
    echo 'estamos en '.$year.'<hr/>';
}else{
    echo 'el año NO es '.$year.'<hr/>';
}

//ejemplo 3
$nombre = "David Sanhueza";
$edad = 23;
$ciudad = 'Santiago';
$continente = 'Latinoamerica';
$mayoria_edad = 18;
if($edad>=$mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if($continente == "Latinoamerica"){
        echo "<h2>Y es de $ciudad</h2><hr/>";
    }else{
        echo "No es latinoamericano<hr/>";
    }
}
else{
    echo "<h2>$nombre no es mayor de edad</h2><hr/>";
}

//ejemplo 4
/*
$dia = 2;
if($dia==1){
    echo "es lunes";
}elseif($dia == 2){
    echo 'es martes';
}elseif($dia == 3){
    echo 'es miercoles';
}elseif($dia==4){
    echo 'es jueves';
}elseif($dia==5){
    echo 'es viernes';
}elseif($dia==6){
    echo 'es sábado';
}else{
    echo 'es domingo';
}
echo '<hr/>';
*/

//switch
$dia = 6;
switch($dia){
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    default:
        echo 'es fin de semana';
        break;
}
echo '<hr>';

//ejemplo 5
$edad1 = 18;
$edad2 = 42;
$edad_oficial = 20;
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Está en edad de trabajar';
}else{
    echo 'no puede trabajar';
}
echo '<br>';
$pais = 'mexico';
if($pais == 'mexico' || $pais == 'españa' || $pais == 'colombia'){
    echo 'en este pais se habla español';
}else{
    echo 'en este país no se habla español';
}
echo'<hr/>';


//goto
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca:
echo "<h1>Me salté 4 echos</h1>";
?>
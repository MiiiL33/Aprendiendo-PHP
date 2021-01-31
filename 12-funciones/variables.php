<?php

$frase = "El nacho es waton y me debe 8 lukas";
echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    $año=2019;
    echo "<h1>$año</h1>";
    return $año;
}

holaMundo();


function buenasDias(){
    return "hola buenos días :)";
}

function buenasTardes(){
    return "hola, buenas tardes :)";
}

function buenasNoches(){
    return "hola, buenas noches :)";
}

$horario = $_GET['horario'];
$horario = "buenas".$horario;
echo $horario();
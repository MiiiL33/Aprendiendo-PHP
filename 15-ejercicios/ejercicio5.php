<?php

/* 
 * crear un array con el contenido de la tabla:
 * Accion || Aventura || Deportes
 * GTA    || Assassin || Fifa
 * COD    || Crash    || Pes 19
 * PUBG   || Prince   || Moto GP 19
 * cada fila debe ir en fichero separado cada columna(includes):
 */

$tabla = array(
    "Acción" => array("GTA 5", "Call of Duty", "PUBG"),
    "Aventura" => array("Assassins Creed", "Crash Bandicoot", "Prince of Persia"),
    "Deportes" => array("Fifa 19", "Pes 19", "Moto GP 19")
);

$categorias = array_keys($tabla);
?>
<table border="1">
    <?php require_once 'ejercicio5/encabezados.php';?>
    <?php require_once 'ejercicio5/primera.php';?>
    <?php require_once 'ejercicio5/segunda.php';?>
    <?php require_once 'ejercicio5/tercera.php';?>
</table>
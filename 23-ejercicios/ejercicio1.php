<?php

/* 
 * crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion
 * de si el parametro get counter está a uno o a cero.
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['contador']) && ($_GET['contador']==1)){
    $_SESSION['numero']++;
}

if(isset($_GET['contador']) && ($_GET['contador']==0)){
    $_SESSION['numero']--;
}
?>
<h1>El valor de la sesión número es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?contador=1">Aumentando el valor</a><br>
<a href="ejercicio1.php?contador=0">Disminuyendo el valor</a><br>
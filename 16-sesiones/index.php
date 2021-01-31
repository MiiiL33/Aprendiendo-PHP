<?php

/* 
 * Sesión: almacena y persiste datos del usuario mientras navega en una web
 * hasta que cierra sesión o cierra navegador
 */

//iniciar la sesión:
session_start();

$variable_normal = "soy texto";
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];

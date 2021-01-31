<?php

/* 
 * recoger dos numeros por la url (parametros get) y hacer todas las operaciones básicas
 * de una calculadora de esos dos números
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];
    echo "<h1>Suma</h1><br><h2>$numero1 + $numero2 =  ".($numero1 + $numero2)."</h2><hr>";
    echo "<h1>Resta</h1><br><h2>$numero1 - $numero2 = ".($numero1 - $numero2)."</h2><hr>";
    echo "<h1>Multiplicación</h1><br><h2>$numero1 * $numero2 = ".($numero1 * $numero2)."</h2><hr>";
    echo "<h1>División</h1><br><h2>$numero1 / $numero2 = ".($numero1 / $numero2)."</h2><hr>";
    echo "<h1>Resto</h1><br><h2>$numero1 % $numero2 = ".($numero1 % $numero2)."</h2><hr>";
}
else{
    echo "<h1>Introduce los datos de forma correcta por la URL</h1>";
}

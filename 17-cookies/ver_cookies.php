<?php

/*
 * para mostrar valor de las cookies, se usa $_COOKIE, variable superglobal,
 * es array asociativo.
 */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie 'micookie'";
}

if(isset($_COOKIE['un_año'])){
    echo "<h1>".$_COOKIE['un_año']."</h1>";
}else{
    echo "No existe la cookie 'un año'";
}
?>
<a href="crear_cookies.php">Crear mis galletas</a>
<a href="borrar_cookies.php">Borrar mis galletas</a>
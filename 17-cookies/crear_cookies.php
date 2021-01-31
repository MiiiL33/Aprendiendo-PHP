<?php

/* 
 * cookie: fichero que se almacena en el pc del usuario que visita la página
 * con el fin de recordar datos o rastrear el comportamiento del mismo en la web

creando cookie
estructura:
setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);
*/

//cookie básica
setcookie("micookie", "valor de mi galleta");

//cookie con expiración
setcookie("un_año", "valor de mi cookie de 365 días", time()+(60*60*24*365));

header('Location:ver_cookies.php');

?>
<a href="ver_cookies.php">Ver las galletas</a>

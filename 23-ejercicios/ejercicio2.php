<?php

/* 
 * 1. una función que valide email con filter_var
 * 2. recoger variable por get y validarla
 * 3. mostrar el resultado
 */

function validarEmail($email){
    $status = 'no válido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "válido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validarEmail($_GET["email"]);
}else{
    echo "Pasa por get un email";
}

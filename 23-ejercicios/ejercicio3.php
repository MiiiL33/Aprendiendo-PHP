<?php

/* 
 * Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones
 * uno para sumar, restar, multiplicar, dividir
 */
$resultado = false;
if(isset($_POST['numero1']) && isset($_POST['numero2'])){
    
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['numero1'] + $_POST['numero2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['numero1'] - $_POST['numero2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['numero1'] * $_POST['numero2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['numero1'] / $_POST['numero2']);
    }
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora en PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="numero1">Número 1</label>
            <input type="number" name="numero1"/><br>
            
            <label for="numero2">Número 2</label>
            <input type="number" name="numero2"/><br>
            
            <input type="submit" value="Sumar" name="sumar"/>
            <input type="submit" value="Restar" name="restar"/><br>
            <input type="submit" value="Multiplicar" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir"/>
        </form>
        
        <?php
        //resultado
            if($resultado != false):
                echo "<h2>$resultado</h2>";
            endif;
        ?>
    </body>
</html>
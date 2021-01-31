<?php

/* 
 * Mostrar todos los números entre dos numeros impares que lleguen por la url ($_GET)
 * 
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];
    if($numero1<$numero2){
        for($i=$numero1; $i<=$numero2; $i++){
            if($i%2 != 0){
                echo "<h4>impar: $i</h4>";
            }
            else{
                echo "<h4>par: $i</h4>";
            }
        }
    }else{
        echo '<h1>El número 1 debe ser menor que el número 2</h1>';
    }
}
else{
    echo '<h1>Ingrese correctamente los parámetros por la url</h1>';
}
<?php

/*
 * bucle for, igual que en c++, java, c
 * 
 */
$resultado = 0;
for($i=0; $i<=100; $i++){
    $resultado = $resultado + $i;
    echo "<p>$resultado</p>";
}
echo "<h1> El resultado es: $resultado</h1><hr>";


if(isset($_GET['numero'])){
    //cambiando tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
for($cont = 1; $cont <=10; $cont++){
    if($numero*$cont == 10){
        echo "no se pudieron mostrar estas operaciones";
        break;
    }
    echo "$numero x $cont = ".($numero*$cont).'<br>';
}
?>

<?php

//bucle while
$numero = 0;
while($numero <= 100){
    echo $numero;
    if($numero != 100){
        echo ', ';
    }
    $numero++;
}
echo '<hr>';

//ejemplo
if(isset($_GET['numero'])){
    //cambiando tipo de dato
    $numero = (int) $_GET['numero'];
}else{
    $numero=1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";
$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador).'<br/>';
    $contador++;
}
echo '<hr>';

//do while: el bucle se ejecuta al menos una vez
$edad = 18;
$cont = 1;
do{
    echo "tienes acceso al local privado $cont<br>";
    $cont++;
}while($edad >= 18 && $cont <= 10);

?>


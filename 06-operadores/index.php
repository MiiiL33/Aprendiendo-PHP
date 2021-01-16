<?php

    //operadores aritmeticos
    $numero1 = 69;
    $numero2 = 420;
    echo 'Suma: '.($numero1+$numero2).'<br/>';
    echo 'Resta: '.($numero1-$numero2).'<br/>';
    echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
    echo 'División: '.($numero1/$numero2).'<br/>';
    echo 'Resto: '.($numero1%$numero2).'<br/>';
    echo '<hr/>';
    //operadores de incremento y decremento
    $año = 2019;
    echo 'Incremento<br/>';
    $año++;
    echo $año.'<hr/>';
    //////////////////
    echo 'Decremento<br/>';
    $año--;
    echo $año.'<hr/>';
    //////////////////
    echo 'Pre-incremento<br/>';
    ++$año;
    echo $año.'<hr/>';
    //////////////////
    echo 'Pre-decremento<br/>';
    --$año;
    echo $año.'<hr/>';
    //operadores de asignación
    $edad = 55;
    echo $edad.'<br/>';
    echo ($edad+=5);
    echo ($edad-=5);
    echo ($edad*=5);
    echo ($edad/=5);
?>
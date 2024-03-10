<?php
    if (-1 <= 0) {
        echo '-1 é menor ou igual a 0<br>';
    }


    $x = 10;
    if ($x > 1) {
        echo 'Valor de $x é maior que 1<br>';
    }


    $y = 12;
    if ($x < 10) {
        echo 'Valor de $y é menor que 10'; 
    } else {
        echo 'Valor de $y é maior que 10';
    }
    echo "<br>";


    $z = 0;
    if ($z == 1) {
        echo 'O valor de $z é 1';
    } elseif ($z == 2) {
        echo 'O valor de $z é 2';
    } else if ($z == 3) {
        echo 'O valor de $z é 3';
    } else {
        echo 'O valor de $z é menor que 1 ou maior que 3';
    }
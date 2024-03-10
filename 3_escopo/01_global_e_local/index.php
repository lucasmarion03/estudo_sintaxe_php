<?php
    # Uma variável declarada fora de uma função tem um escopo global e só pode ser acessada fora de uma função
    $x = 5;

    # Chamar essa função vai resultar num erro, já que estamos usando uma variável global dentro de uma função
    function teste() {
        echo 'O valor da variável $x dentro dessa função é ' . $x . "<br>";
    }
    # teste();

    echo 'O valor da variável $x fora da função é ' . $x . "<br><br>";


    # Uma variável decladarada dentro de um função tem um escopo local e só pode ser acessada dentro da função
    function novoTeste() {
        $y = 1;
        echo 'O valor da variável $y dentro da função é ' . $y . "<br>";
    }
    novoTeste();

    # Tentar chamar a variável $y fora da função vai resultar num erro
    # echo $y;
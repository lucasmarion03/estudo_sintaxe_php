<?php
    /*
     É possível verificar os tipos de dados através de funções integradas do PHP
    */

    // is_int() checa se um valor ou uma variável é int
    $varInt = 12;
    if (is_int($varInt)) {
        echo '$varInt possui um int';
    } else {
        echo '$varInt não possui um int';
    }

    echo "<br><br>";

    // is_float() checa se um valor ou uma variável é float
    $varFloat = 1.5;
    if (is_float($varFloat)) {
        echo '$varFloat possui um float';
    } else {
        echo '$varFloat não possui um float';
    }

    echo "<br><br>";

    $varString = "Sou uma string";
    if (is_string($varString)) {
        echo '$varString possui uma string';
    } else {
        echo '$varString não possui uma string';
    }

    echo "<br><br>";

    // is_bool() checa se um valor ou uma variável é boolean
    $varBoolean = false;
    if (is_bool($varBoolean)) {
        echo '$varBoolean possui um boolean';
    } else {
        echo '$varBoolean não possui um boolean';
    }

    echo "<br><br>";

    // Existe uma função que retorna o tipo de dado que uma função armazena e o conteúdo dela
    $carros = ["Volvo","BMW","Toyota"];
    var_dump($carros);

    echo "<br>";

    $ano_de_nascimento = 2003;
    var_dump($ano_de_nascimento);

    echo "<br>";

    $peso = 83.2;
    var_dump($peso);
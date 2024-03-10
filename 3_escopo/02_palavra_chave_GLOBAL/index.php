<?php
    # Usar a palavra chave "GLOBAL" permite o acesso de uma variável global dentro de uma função
    $x = 5;
    $y = 10;

    # Chamar essa função vai dar erro. Mesmo sendo possível que ela escreva o valor da variável $x, uma vez que ela foi declarada usando GLOBAL, a variável $y não foi
    echo "TESTE FALHO:<br>";
    function testeFalho() {
        GLOBAL $x;
        echo $x . "<br>";
        echo $y;
    }
    testeFalho();

    echo "<br>TESTE FUNCIONAL:<br>";

    function testeFuncional() {
        GLOBAL $x, $y;
        echo $x . "<br>" . $y ."<br>";
    }
    testeFuncional();
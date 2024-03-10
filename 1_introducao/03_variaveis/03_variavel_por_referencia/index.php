<?php
    /* 
     Quando criamos uma variável e atribuímos o valor de outra variável a ela,
     apenas estamos atribuindo uma cópia desse valor. Por exemplo, se criarmos
     as variáveis x e y e atribuirmos o valor de x para y, y receberá uma CÓPIA
     do valor de x
    */
    $x = 1;
    $y = $x;
    echo "$x<br>";
    echo "$y<br><br>";

    /* 
     É importante entender esse conceito, por conta disso: quando atribuímos uma cópia
     de um valor, podemos mexer com as variáveis sem medo de uma alterar o valor da outra.
     Porém, se atribuímos o valor de uma variável através de referência, ambas as variáveis
     estarão apontando para o mesmo endereço de memória; isso faz com que, caso uma operação
     seja feita para alterar o valor de uma das variáveis, ambas terão o valor alterado
    */ 
    $a = 4;
    $b = & $a;
    echo "$a<br>";
    echo "$b<br>";

    $a = 12;
    echo "$a<br>";
    echo "$b<br>";


<?php
    /*
     Um array associativo é um array que trabalha com chave e valor
     A sua estrutura é a mesma de um array comum, porém com a diferença de não possuir
     apenas dados ordenados, mas também suas chaves correpondentes
    */

    $cachorro = ["nome" => "Bolota", "idade" => 2, "cor" => "Cinza"];

    // A função print_r() funciona em um array associativo do mesmo jeito que ela funciona com um array convencional
    print_r($cachorro);

    echo "<br><br>";

    // Para acessar um componente do array, não usamos o índice desejado. É usada chave associada ao valor desejado
    echo $cachorro["idade"];
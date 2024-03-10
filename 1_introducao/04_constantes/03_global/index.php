<?php
    # Constantes são globais, podendo ser acessadas em qualquer escopo
    define("CONT", 10);

    # Escopo global
    echo CONT;

    # Escopo de função, sendo passado como parâmetro
    for ($i = 0; $i < CONT; $i++) {
        echo "$i ";
    }

    echo "<br>";

    # Escopo local
    function idade_em_10_anos($idade) {
        echo "Em 10 anos, eu terei " . ($idade + CONT) . " anos";
    }
    $x = 10;
    idade_em_10_anos($x);
<?php
    $x = "Olá, mundo!";

    # Retorna o tamanho da string
    echo strlen($x);
    echo "<br><br>";

    # Conta o número de palavras na string, separadas por espaço
    # OBS: números não contam como palavras
    $y = "esta string possui quatro palavras";
    echo str_word_count($y);
    echo "<br><br>";

    # Retornar a primeira posição da palavra ou letra desejada
    echo strpos("Olá, mundo!", "mundo");
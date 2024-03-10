<?php

    # Retorna o valor de pi
    echo pi() . "<br><br>";


    # Funções que retornam o menor número e o maior número, respectivamente
    $arrMin = [0, 150, 30, 20, -8, -200];
    $arrMax = [0, 150, 30, 20, -8, -200];

    echo min($arrMin) . "<br>";
    echo max($arrMax) . "<br><br>";


    # Retorna o valor positivo do número
    $a = -58;
    echo abs($a) . "<br><br>";


    # Retorna a raiz quadrada de um número
    echo "Raiz quadrada de 9: " . sqrt(9) . "<br>";
    echo "Raiz quadrada de 16: " . sqrt(16) . "<br>";
    echo "Raiz quadrada de 625: " .  sqrt(625) . "<br><br>";


    # Arredonda um float para o número mais próximo
    echo round(0.6) . "<br>";
    echo round (0.49) . "<br><br>";


    # Gera um número aleatório
    echo rand() . "<br>";
    # Para ter mais controle, é possível definir um valor mínimo e um valor máximo (ambos ints)
    echo rand(1, 4) . "<br>";
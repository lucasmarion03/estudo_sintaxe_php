<?php
    # Array que armazena variáveis de escopo global. Sintaxe: $GLOBALS[index] --> 'index' equivale ao nome da variável.
    # Esse array pode ser acessado dentro de funções e pode ser usado para alterar o valor das variáveis globais diretamente
    
    $x = 5;
    $y = 10;

    function teste() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    echo "Antes de chamar função<br>";
    echo "$x<br>$y<br><br>";

    echo "Depois de chamar função<br>";
    teste();
    echo "$x<br>$y<br><br>";
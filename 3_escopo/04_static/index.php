<?php
    # Depois de uma função ser executada, suas variáveis são deletadas, fazendo com que seus valores sejam redefinidos para o inicial
    # Para que uma variável local não tenha seu valor resetado, usamos a palavra chave static

    function teste() {
        static $x = 0;
        echo $x . "<br>";
        $x++;
    }

    teste();
    teste();
    teste();
    teste();
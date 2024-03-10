<?php declare(strict_types = 1);

    // É possível definir o tipo de dado que a função deve retornar
    function apresentar(string $nome, int $idade) : string {
        return "Olá, meu nome é $nome e tenho $idade anos.";
    }
    echo apresentar("Lucas", 20);

    // A função acima retornará um dado do tipo int

    
    // A função a seguir retornará um erro se for executada
    function somar(float $a, float $b) : int {
        return $a + $b;
    }
    echo somar(4.0, 5.0);
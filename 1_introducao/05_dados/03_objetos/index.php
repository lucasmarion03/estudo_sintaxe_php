<?php
    /*
     Objetos são um tipo de dado que consiste em dados relacionados agrupados em uma classe
     Eles possuem métodos, que realizam ações, e propriedades, que são suas características
    */

    class Pessoa {
        function falar() {
            echo "Olá, eu sou uma pessoa.";
        }
    }

    $lucas = new Pessoa();
    $lucas->nome = "Lucas Marion";

    echo "$lucas->nome<br><br>";
    $lucas->falar();

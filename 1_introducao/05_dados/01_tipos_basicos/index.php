<?php
    /*
     Os tipos básicos de dados em PHP são string, int, float, boolean e array
     Os tipos são atribuídos às variáveis através da atribuição de um valor
     correspondente a esse tipo.
    */

    // Uma string é qualquer texto envolto por aspas ou aspas duplas
    $varString1 = "Eu sou uma string.";
    $varString2 = 'Eu também sou uma string!';
    echo "$varString1<br>";
    echo "$varString2<br><br>";


    // Um int é composto por um único número inteiro, podendo ser tanto positivo quanto negativo
    $varInt1 = 10;
    $varInt2 = -57;
    echo "$varInt1<br>";
    echo "$varInt2<br><br>";

    // Um float corresponde a um número de ponto flutuante
    $varFloat = 9.8;
    echo "$varFloat<br><br>";


    // Boolean é um valor binário de verdadeiro ou falso
    $varBoolean1 = false;
    $varBoolean2 = true;

    // Podemos atribuir o valor de um boolean como 'true' ou 'false', mas o PHP vai ler esse valor como 1 ou 0. Se pedirmos para o programa escrever um valor 'false', ele não vai escrever nada
    echo "$varBoolean1<br>";
    echo "$varBoolean2<br><br>";


    // Um array é uma estrutura de dados composta por um conjunto de valores (em PHP, cada valor pode ser de um tipo diferente) armazenados em ordem contígua na memória
    $arr1 = [1, 2, 3];
    $arr2 = ["Lucas", 20, 1.75];

    // Para que o programa retorne uma saída composta pelos elementos do array, usamos a função print_r($nome_do_array)
    print_r($arr1);
    echo "<br>";
    print_r($arr2);

    echo "<br><br>";

    // Para escrever um único elemento, usamos a sintaxe echo $arr[indice_desejado]
    echo $arr1[1] . "<br>";
    echo $arr2[0] . "<br>";
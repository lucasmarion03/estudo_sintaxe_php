<?php

    # Método array_push() adiciona múltiplos elementos ao fim do array
    # Sintaxe --> array_push($array, elemento_1, elemento_2, ... elemento_n);
    $frutas = array(
        "Maçã", 
        "Banana", 
        "Cereja"
    );

    array_push($frutas, "Kiwi", "Melancia", "Pera");
    print_r($frutas);
    echo "<br>";

    # Método array_unshift() adiciona elementos no início do array
    # Sintaxe --> array_unshift($array, elemento_1, elemento_2, ... elemento_n);
    array_unshift($frutas, "Carambola", "Amora", "Mirtilo");
    print_r($frutas);
    echo "<br><br>";


    # Para adicionar elementos no final de um array associativo, usamos o operador +=
    $carro = array(
        "marca" => "Ford",
        "modelo" => "Mustang",
    );

    $carro += ["cor" => "vermelho", "ano_de_fabricação" =>1964];
    print_r($carro);
    echo "<br>";

    # Não sei uma função parecida com o unshift para arrays associativos
    # Alternativa é criar um novo array, colocando os elementos desejados no início e adicionando o array associativo no fim
    $carro = array("placa" => "ABC123", "material_dos_bancos" => "couro") + $carro;
    print_r($carro);
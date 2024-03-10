<?php
    # Um array pode ter funções em sua composição
    function minhaFuncao() {
        echo "Olá, mundo!<br>";
    }

    $arr = array("Volvo", 15, "minhaFuncao");

    # Para executa-la, o índice a que ela pertence é chamado e usa-se um par de parênteses no fim da declaração
    $arr[2]();


    # Em um array associativo
    $arrAssoc = ["carro" => "Volvo", "idade" => 2, "funcao" => "minhaFuncao"];
    $arrAssoc["funcao"]();
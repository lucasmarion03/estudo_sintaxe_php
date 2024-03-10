<?php declare(strict_types = 1);
    
    function somarNumeros(int $x, int $y) {
        return $x + $y;
    }

    echo somarNumeros(4, 5);

    /* 
     Se a instrução declare(strict_types = 1) não tivesse sido implementada, seria possível chamar a função anterior com parâmetros sem ser do tipo int. Por exemplo:
        echo somarNumeros(5, "5 dias");

     Como o strict não estaria habilitado, o PHP interpretaria "5 dias" como int(5), retornando 10
    */

<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            echo "$num ";
        }
    }

    echo "<br><br>";

    $arrAssoc = ["Alberto" => 5.0, "Bianca" => 8.6, "Cleber" => 4.1];
    foreach($arrAssoc as $nome => $nota) {
        echo "${nome}: $nota<br>";
    }

    echo "<br><br>";

    class Carro {
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
    }

    $meuCarro = new Carro("Prata", "Civic");
    foreach($meuCarro as $atributo => $valor) {
        echo "$atributo: $valor<br>";
    }
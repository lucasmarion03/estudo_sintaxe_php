<?php
    // Padrão
    function mensagem(){
        echo 'Olá, mundo!';
    }

    mensagem();
    echo "<br><br>";


    // Parâmetro único
    function membrosFamilia($nome) {
        echo "$nome Souza.<br>";
    }

    membrosFamilia("Thiago");
    membrosFamilia("Elaine");
    membrosFamilia("Thedoro");
    membrosFamilia("Flávia");
    membrosFamilia("Flávio");
    membrosFamilia("Douglas");
    echo "<br>";


    // Múltiplos parâmetros
    function membrosFamiliaNascimento($nome, $ano) {
        echo "$nome Souza. Nasceu em $ano.<br>";
    }

    membrosFamiliaNascimento("Thiago", 1975);
    membrosFamiliaNascimento("Elaine", 1974);
    membrosFamiliaNascimento("Thedoro", 2000);
    membrosFamiliaNascimento("Flávia", 2004);
    membrosFamiliaNascimento("Flávio", 2004);
    membrosFamiliaNascimento("Douglas", 2008);
    echo "<br>";


    // Trabalhando com um argumento padrão
    function definirAltura($alturaMinima = 50) {
        echo "A altura mínima é $alturaMinima.<br>";
    }

    definirAltura(350);
    definirAltura();
    definirAltura(135);
    definirAltura(80);
    echo "<br>";


    // Retornando valores
    function soma($x, $y) {
        $z = $x + $y;
        return $z;
    }

    echo "2 + 5 = " . soma(2, 5) . "<br>";
    echo "3 + 3 = " . soma(3, 3) . "<br>";
    echo "1 + 6 = " . soma(1, 6) . "<br><br>";


    // Passando argumentos por referência
    function somarCinco(& $valor) {
        $valor += 5;
    }

    $num = 2;
    echo "$num<br>";
    somarCinco($num);
    echo "$num<br><br>";


    // Quantidade variável de argumentos
    // Usar ... na frente do parâmetro da função, indica que ela pode receber qualquer quantidade de parâmetros. Isso se chama função variada.
    // O argumento da função variada é um array
    function somarNumeros(...$x) {
        $n = 0;
        $len = count($x);

        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }

        return $n;
    }

    $a = somarNumeros(1, 4, 3, 7);
    echo "$a<br><br>";
<?php
    
    // É possível declarar variáveis com o valor de uma outra variável
    // Por exemplo, se criarmos uma variável x com o valor 'y',
    // podemos criar uma variável y através de 'x'
    $x = "y";
    echo '$x = ' . $x . "<br>";

    $$x = "x";
    echo '$$x = "x";<br>';
    echo "A variável criada na declaração acima, se chama 'y'<br>";
    echo '$y = ' . $y;
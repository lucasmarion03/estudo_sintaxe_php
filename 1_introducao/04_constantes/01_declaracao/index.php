<?php

    const saudar = "Olá";
    echo saudar . "<br>";

    const verdadeiro = true;
    if (!verdadeiro) {
        echo "false";
    } else {
        echo "verdadeiro";
    }

    echo "<br>";

    define("horario", "dia");
    switch (horario) {
        case "dia":
            define("SAUDAR", "Bom dia!");
            break;
        case "tarde":
            define("SAUDAR", "Boa tarde!");
            break;
        case "noite":
            define("SAUDAR", "Boa noite");
            break;
    }
    echo SAUDAR;
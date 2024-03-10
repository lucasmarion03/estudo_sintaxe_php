<?php
    $dia = 'smábado';

    switch($dia) {
        case 'segunda':
            echo 'Hoje é segunda';
            break;
        case 'terça':
            echo 'Hoje é terça';
            break;
        case 'quarta':
            echo 'Hoje é quarta';
            break;
        case 'quinta':
            echo 'Hoje é quinta';
            break;
        case 'sexta':
            echo 'Hoje é sexta';
            break;
        case 'sábado':
            echo 'Hoje é sábado';
            break;
        case 'domingo':
            echo 'Hoje é domingo';
            break;
        default:
            echo 'Dia inválido';
    }
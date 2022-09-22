<?php

    $opcao = $_POST['opcao'];

    switch ($opcao) {
        case 1:
            echo 'Saldo Conta Corrente';
            break;
        case 2:
            echo 'Sacar Dinheiro';
            break;
        case 3:
            echo 'Fazer empréstimo';
            break;
        case 4:
            echo 'Sair';
            break;
        default:
           echo 'Erro: nenhuma das opções foram escolhidas';
    }

?>
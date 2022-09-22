<?php

    $sexo = $_POST['sexo'];
    $altura = (float) $_POST['altura'];

    if ($sexo = 'Masculino') {
        $altura_ideal = (72.7*$altura)-58;
        echo "Baseado nas informações dadas, seu peso ideal é: $altura_ideal" ;
    }else {
        $altura_ideal = (62.1*$altura)-44.7;
        echo "Baseado nas informações dadas, seu peso ideal é: $altura_ideal" ;
    }

?>
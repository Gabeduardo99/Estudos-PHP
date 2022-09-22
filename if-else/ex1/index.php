<?php

    $salario = $_POST['salario'];

    if ($salario >= '1000') {
        $reajuste = $salario + $salario*0.30;
        echo "Com um reajuste de 30%, seu salário foi para R$$reajuste";
    }else {
        $reajuste = $salario + $salario*0.50;
        echo "Com um reajuste de 50%, seu salário foi para R$$reajuste";
    }

?>
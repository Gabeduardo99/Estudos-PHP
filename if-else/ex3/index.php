<?php

    $media = ($_POST['matematica'] + $_POST['portugues'] + $_POST['geografia'] + $_POST['historia']) / 4;
    $txt = "Sua média foi de $media";

    if ($media >= 7) {
       echo $txt.". Parabens, você passou direto!!";
    }elseif ($media >= 4) {
        echo $txt.". Infelizmente, você está de recuperação :(";
    }else {
        echo $txt.". Infelizmente, você está reprovado :(";
    }

?>
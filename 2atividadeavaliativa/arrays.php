<?php
$clientes= "Joao ; Claudio; Matheus; Guilherme; Eduardo; Jose; Gustavo; Gabriel; Vitor; Anthony";
$clientes_array=explode(";", $clientes);

foreach($clientes_array as $elemento){
    $frase = "Olá " . $elemento . " Seja bem vindo(a) </br>";
    echo $frase;
    
}

?>
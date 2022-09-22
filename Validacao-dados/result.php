<?php
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    if(!preg_match('/^[^0-9]{2,80}$/i',$nome)){
        echo "Nome inválido";
    }
    if(!preg_match('',$email)){
        echo "E-mail inválido";
    }
?>

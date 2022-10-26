<?php
$nome =$_POST['nome'];
$login =$_POST['login'];
$senha =$_POST['senha'];

$senhacript=md5("senha");

$cadastro=array($nome,$login,$senhacript);
    echo $cadastro[0]."</br>";
    echo $cadastro[1]."</br>";
    echo $cadastro[2];


?>

<a href="trabalho.php">Voltar</a>
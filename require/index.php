<?php
require_once 'header.php';
require_once 'function.php';
?>
<h1>Home</h1>
<?php 
$nomes='Angela;Paula;Carla;Luciana';
$nomes_array=explode(';',$nomes);
var_dump($nomes_array);
echo "<br/>".$nomes_array[2];
echo "<h3>Html interpretado</h3>";
echo htmlentities('<h3>Não interpreta</h3>');
$texto="Olá nome, seja bem-vindo!";
$nome="Jorge";
echo str_replace('nome',$nome,$texto);
$saudacao="Olá nome, você tem idade anos!";
$busca=['nome','idade'];
$troca=['Leonardo','15'];
echo str_replace($busca, $troca,$saudacao);
echo "<hr/>";
$senha="123456";
echo md5($senha);
echo "<br/>";
$dupla=md5($senha);
echo md5($dupla);
echo "<br/>";
echo sha1($senha);
?>
<?php
require_once 'footer.php';
?>
<?php
$paises=[
    '1' => 'Brasil',
    '2' => 'Alemanha',
    '3' => 'Argentina',
    '4' => 'Estados Unidos',
    '5' => 'Inglaterra',
    '6' => 'Chile',
    '7' => 'China',
    '8' => 'Japao',
    '9' => 'Mexico',
    '10' => 'Honduras'
];
foreach($paises as $chave => $valor){
    echo $chave . "- ".$valor."<br/>";}
?> 

<hr>

<form action="calcular.php" method="POST">
<input type="number" name="um"/>
<input type="number" name="dois"/>
<input type="submit" value="Calcular"/>
</form>

<hr>

<?php
require_once 'arrays.php';
?> 

<hr>

<form action="cadastro.php" method="POST">
<h4> Digite seu nome: </h4> 
<input type="text" name="nome"/>
</br>
<h4> Digite seu login: </h4> 
<input type="text" name="login"/>
</br>
<h4> Digite sua senha: </h4> 
<input type="password" name="senha"/>
<input type="submit" value="Cadastrar"/>
</form>
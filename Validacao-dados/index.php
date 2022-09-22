<?php
    date_default_timezone_set('America/Sao_Paulo');
    $data=date("Y-m-d H:i:s");
    echo $data;
    setlocale(LC_ALL, 'pt_Br', 'ptb');
    echo strftime('%A');
?>
<hr/>
<form action="result.php" method="post">
    Nome: <input type="text" size="30"
    name="nome"><br/>
    E-mail: <input type="email" size="80"
    name="email"><br/>
    <input type="submit" value="Validar">
</form>
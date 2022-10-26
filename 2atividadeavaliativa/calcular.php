<?php
function calcular ($v1,$v2){
    for ($c = $v2; $c<=$v1; $c+=2){
        echo $c . "<br>";
}
}
$num1 = $_POST["um"];
$num2 = $_POST["dois"];

if ($num1 < $num2){
    echo "O primeiro numero deve ser maior que o segundo";
}else {
    calcular($num1,$num2);
}
?>

</br>
<a href="trabalho.php">Voltar</a>
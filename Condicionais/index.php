<?php
$i=16;
$im=18;
$imax=60;
if($i<$im){
    echo "Não obrigatório";
}elseif($i>$imax){
    echo "Não Obrigatório";
    }else{
        echo "Obrigatório";
    }
?>
<hr/>
<?php
$a=20;
$b=25;
if($a==$b){
    echo "A e B são Iguais";
}elseif($a>$b){
    echo "A é maior que B";
    }elseif($a>=$b){
        echo "A é maior ou igual a B";
    }elseif($b<$a){
            echo "B é maior que A";
        }else{
            echo "Nenhuma condição é satisfatória";
        }
?>
<hr/>
<?php
$i=16;
$im=18;
$imax=60;
if($i<$im || $i>$imax){
    echo "Não obrigatório";
}else{
    echo "Obrigatório";
}
?>
<hr/>
<?php
$i=5;
switch($i){
    case 0:
        echo "I é igual a 0";
        break;
    case 1:
        echo "I é igual a 1";
        break;
    default:
        echo "I não é 0 nem 1";
}
?>
<hr/>
<?php
$idade=14;
switch($idade){
    case ($idade<=12):
        echo "Criança";
        break;
    case ($idade>12 and $idade<18):
        echo "Adolescente";
        break;
    default:
        echo "Jovem";
}
?>
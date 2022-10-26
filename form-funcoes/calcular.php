<?php
$num_um=$_POST['um'];
$op=$_POST['op'];
$num_dois=$_POST['dois'];
if($op=="soma"){
    echo $num_um."+".$num_dois."=".
    $num_um+$num_dois;
}elseif($op=="sub"){
        echo $num_um."-".$num_dois."=".
        $num_um-$num_dois;
    }elseif($op=="multi"){
            echo $num_um."*".$num_dois."=".
            $num_um*$num_dois;
        }elseif($op=="div"){
                echo $num_um."/".$num_dois."=".
                $num_um/$num_dois;
            }else{
                echo "Opção Inválida";
            }
?>
<br/>
<a href="index.php">Voltar</a>
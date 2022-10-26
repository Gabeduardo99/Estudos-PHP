<form action="calcular.php" method="POST">
    <input type="number" name="um"/>
    <select name="op">
        <option value="soma">+</option>
        <option value="sub">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
    </select>
    <input type="number" name="dois"/>
    <input type="submit" value="Calcular"/>
</form>
<?php
    function novamsg(){
        echo "Nova função";
    }
    novamsg();
?>
<hr/>
<?php
    function nome($nome){
        echo "$nome da Silva<br/>";
    }
    nome("Joel");
    nome("Maria");
?>
<hr/>
<?php
    function nomeano($nome, $ano){
        echo "$nome, nascido em $ano<br/>";
    }
    nomeano("Paulo", 1975);
?>
<hr/>
<?php
    function semvalor($valor=10){
        echo "O valor é $valor<br/>";
    }
    semvalor();
    semvalor(30);
?>
<hr/>
<?php
    function soma($x, $y){
        $z=$x+$y;
        return $z;
    }
    echo "5+10=",soma(5,10);
?>
<hr/>
<?php
$nomes=['Carlos','Zé','João'];
function imprime($param){
    foreach($param as $valor){
        echo $valor.", ";
    }
}
imprime($nomes);
?>
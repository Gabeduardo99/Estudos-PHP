<form action="index.php" method="POST">
    <input type="text" name="nome"
    placeholder="Nome"/><br/>
    <input type="email" name="email"
    placeholder="E-mail"/><br/>
    <input type="submit" name="grava"
    value="Gravar"/>
</form>
<?php
include "conn.php";
if(isset($_POST['grava'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $grava=$conn->prepare('INSERT INTO
     `cadastro` (`id_cad`, `nome_cad`, 
     `email_cad`) VALUES 
     (NULL, :pnome, :pemail);');
    $grava->bindValue(':pnome',$nome);
    $grava->bindValue(':pemail',$email);
    $grava->execute();
    echo "Gravado!";
}
if(isset($_GET['excluir'])){
    $id=$_GET['id'];
    $excluir=$conn->prepare('DELETE 
    FROM cadastro WHERE 
    `cadastro`.`id_cad` = :pid');
    $excluir->bindValue(':pid',$id);
    $excluir->execute();
    echo "Excluído com sucesso!";
}
?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th></th>
    </tr>
    <?php
    $exibir=$conn->prepare('
    SELECT * FROM `cadastro`');
    $exibir->execute();
    if($exibir->rowCount()==0){
        echo "Não há registros";
    }else{
        while($row=$exibir->fetch()){
            echo "<tr>";
            echo "<td>".$row['nome_cad']."</td>";
            echo "<td>".$row['email_cad']."</td>";
            echo "<td><a href='index.php?excluir&id=".$row['id_cad']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>
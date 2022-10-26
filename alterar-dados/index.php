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
if(isset($_GET['alterar'])){
    $id=$_GET['id'];
    $consu=$conn->prepare('
    SELECT * FROM `cadastro` 
    WHERE `id_cad`= :pid;');
    $consu->bindValue(':pid',$id);
    $consu->execute();
    $row=$consu->fetch();
?>
<form action="index.php" method="POST">
    <input type="hidden" name="id"
    value="<?php echo $row['id_cad']; ?>"/>
    <input type="text" name="nome"
    placeholder="Nome" value="<?php echo $row['nome_cad'];?>"/><br/>
    <input type="email" name="email"
    placeholder="E-mail" value="<?php echo $row['email_cad'];?>"/><br/>
    <input type="submit" name="altera"
    value="Alterar"/>
</form>
<?php
}
if(isset($_POST['altera'])){
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $altera=$conn->prepare('
    UPDATE `cadastro` SET 
    `nome_cad` = :pnome, 
    `email_cad` = :pemail 
    WHERE `cadastro`.`id_cad` = :pid;');
    $altera->bindValue(':pnome',$nome);
    $altera->bindValue(':pemail',$email);
    $altera->bindValue(':pid',$id);
    $altera->execute();
    echo "Cadastro alterado com sucesso!";
}
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
    $nome=$_GET['nome'];
    $excluir=$conn->prepare('DELETE 
    FROM cadastro WHERE 
    `cadastro`.`id_cad` = :pid');
    $excluir->bindValue(':pid',$id);
    $excluir->execute();
    echo "$nome excluído com sucesso!";
}
if(isset($_GET['aviso'])){
    $id=$_GET['id'];
    $nome=$_GET['nome'];
    echo "Deseja realmente excluir $nome?<br>";
    echo "<a href='index.php?excluir&id=$id&nome=$nome'>Sim</a> 
    <a href='index.php'>Não</a>";
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
            echo "<td><a href='index.php?aviso&id=".$row['id_cad']."&nome=".$row['nome_cad']."'>Excluir</a></td>";
            echo "<td><a href='index.php?alterar&id=".$row['id_cad']."'>Alterar</a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>
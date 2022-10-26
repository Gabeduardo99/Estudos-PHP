
<form action="index.php" method="POST">
    <input type="text" name="nome"
    placeholder="Nome">
    <br>
    <input type="email" name="email"
    placeholder="E-mail">
    <br>
    <input name="grava" type="submit" 
    value="Gravar">
</form>
<?php
include "conn.php";
if(isset($_POST['grava'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $grava=$conn->prepare('INSERT 
    INTO `cadastro` (`id_cad`, 
    `nome_cad`, `email_cad`) VALUES 
    (NULL, :pnome , :pemail);');
    $grava->bindValue(':pnome',$nome);
    $grava->bindValue(':pemail',$email);
    $grava->execute();
    echo "Gravado com sucesso!";
}
?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
    </tr>
    <?php
        $exibir=$conn->prepare('SELECT * FROM `cadastro`');
        $exibir->execute();
        if($exibir->rowCount()==0){
            echo "Não há registros";
        }else{
            while($row=$exibir->fetch()){
                echo "<tr>";
                echo "<td>".$row['nome_cad']."</td>";
                echo "<td>".$row['email_cad']."</td>";
                echo "</tr>";
            }
        }
    ?>
</table>

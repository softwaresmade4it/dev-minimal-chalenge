<?php
    //Pega os dados do input e Altera o cliente
    include("../server/connection.php");
    $id_cliente = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "UPDATE `tcliente` SET `nome` = '$nome', `cpf` = '$cpf', `telefone` = '$telefone', `email` = '$email' WHERE id_cliente = $id_cliente";

    if(mysqli_query($conn, $sql)){
        echo "Alterado com sucesso";
    }
    else{
        echo "ERRO";
    }
    echo"<br><a href='../index.php'>VOLTAR</a>"
?>


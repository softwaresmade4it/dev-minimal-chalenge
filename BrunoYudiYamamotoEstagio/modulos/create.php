<?php
    //Pega os dados do input e cadastrar o cliente
    include("../server/connection.php");
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sql = "INSERT INTO desafio.tcliente (nome,cpf,telefone,email) 
    VALUES ('{$nome}', '{$cpf}', '{$telefone}', '{$email}')";
    if(mysqli_query($conn, $sql)){
        echo "Cadastrado com sucesso";
    }
    else{
        echo "ERRO";
    }
    echo"<br><a id='voltar' href='../index.php'>VOLTAR</a>"
?>


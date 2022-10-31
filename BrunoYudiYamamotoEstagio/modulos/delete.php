<?php
    //Pega os dados do input e deletar o cliente
    include("../server/connection.php");
    $id= $_GET['id'] ?? '';

    $sql = "DELETE FROM tcliente WHERE id_cliente = $id";

    if(mysqli_query($conn, $sql)){
        echo "Excluido com sucesso";
    }
    else{
        echo "ERRO";
    }
    echo"<br><a href='../index.php'>VOLTAR</a>"
?>


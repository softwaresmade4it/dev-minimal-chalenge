<?php
    
    $hostname = "localhost";
    $bancodedados = "desafio";
    $usuario = "root";
    $senha = "root";

    $conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

    if(mysqli_connect_errno()){
        echo "Failed to connect!";
        exit();
    }
?>
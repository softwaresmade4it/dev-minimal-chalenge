<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!--Fazer a busca no banco de dados para alterar o cliente-->
    <?php
        include("../server/connection.php");

        $id= $_GET['id'] ?? '';
        $sql= "SELECT * FROM tcliente WHERE id_cliente = $id;";

        $dados = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($dados);
    ?>

    <!--Formulario para Alterar o cliente-->
    <div  id="alterar" name= "alterar">
        <h1>Alterar Cadastro</h1>
        <form action="edit_confirmation.php" method="post" id="forms">
            <div id="linha">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required value="<?php echo $row['nome']?>"/>
            </div>
            <div id="linha">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" required placeholder="xxx.xxx.xxx-xx" value="<?php echo $row['cpf']?>">
            </div>
            <div id="linha">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" pattern="[0-9]{2} [0-9]{5}[0-9]{4}" required placeholder="99 999999999">
            </div>
            <div id="linha"> 
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="nome@email.com" required>
            </div>
            <div id="linha">
                <button type="submit" id="editar">Editar</button>
                <a id="voltar" href="../index.php">Voltar</a>
                <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']?>">
            </div>
        </form>
    </div>
</body>
</html>
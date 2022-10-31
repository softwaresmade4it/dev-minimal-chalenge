<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Cadastro de cliente-->
    <div  id="cadastro" name= "cadastro">
        <!--Formulario com o metodo post para enviar os dados do input para o banco de dados-->
        <form action="modulos/create.php" method="post" id="forms">
            <h1>Cadastro</h1>
            <div id="linha">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required/>
            </div>
            <div id="linha">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" required placeholder="xxx.xxx.xxx-xx">
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
                <button type="submit" id="cadastrar">Cadastrar</button>             
            </div>
        </form>
    </div>

    <!--Lista de clientes-->
    <div id="tabela" name="tabela">
        <?php
            include("modulos/search.php");
        ?>
    </div>

</body>
</html>
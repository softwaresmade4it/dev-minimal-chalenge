<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        include("./server/connection.php");

        $sql = "SELECT * FROM tcliente";

        $date = mysqli_query($conn, $sql);
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                while($row = mysqli_fetch_assoc($date)){
                    $id_cliente = $row['id_cliente'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];

                    echo "<tr>
                            <td>$id_cliente</td>
                            <td>$nome</td>
                            <td>$cpf</td>
                            <td>$telefone</td>
                            <td>$email</td>
                            <td>
                                <a href='modulos/edit.php?id=$id_cliente' id='editar'>Editar</a>
                                <a href='modulos/delete.php?id=$id_cliente' id='excluir'>Excluir</a>
                            </td>
                        </tr>";
                }
            ?>

        </tbody>
    </table>
</body>
</html>
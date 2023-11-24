<?php
if(isset($_POST["submit"]))
{

    include_once("config.php");

    
    $nome = $_POST["nome"];
    $endereco_cliente = $_POST["endereco_cliente"];
    $numero_cliente=  $_POST["numero_cliente"];
    $email= $_POST["email"];

    $response = mysqli_query($conexao, " INSERT INTO  cliente( nome, endereco_cliente, numero_cliente, email)
     VALUES('$nome', '$endereco_cliente', '$numero_cliente' , '$email') ");
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <form action="form2.php" method="post">
        <div>
            
                <h1>Cliente</h1><br>
               

                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Inserir o nome do cliente"><br><br>

                <label for="endereco_cliente">Endereco</label>
                <input type="text" name="endereco_cliente" id="Endereco_cliente" placeholder="Inserir Endereco do Cliente"><br><br>

                <label for="numero_cliente">Numero:</label>
                <input type="date" name="numero_cliente" id="numero_cliente" placeholder="Inserir o Nome do cliente"><br><br>

                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Inserir email"><br><br>

                <input type="submit" name="submit" id="submit">
        </div>
    </form>
   
</body>
</html>
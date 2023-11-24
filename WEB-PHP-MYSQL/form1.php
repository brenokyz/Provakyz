<?php
if(isset($_POST["submit"]))
{

    include_once("config.php");


    $tipo_documento = $_POST["tipo_documento"];
    $partes_envolvidas = $_POST["partes_envolvidas"];
    $tabeliao= $_POST["tabeliao"];
    $data_registro=  $_POST["data_registro"];

    $response = mysqli_query($conexao,  "INSERT INTO  registro( tipo_documento, partes_envolvidas, data_registro, tabeliao)
     VALUES( '$tipo_documento', '$partes_envolvidas', '$data_registro', '$tabeliao') ");
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <form action="form1.php" method="post">
        <div class="caixa">
                <h1>Registro</h1><br>
                
                <label for="tipo_documento">Tipo de Documento:</label>
                <input type="text" name="tipo_documento" id="tipo_documento" placeholder="Inserir o Tipo de Documento"><br><br>

                <label for="partes_envolvidas">Partes Envolvidas</label>
                <input type="text" name="partes_envolvidas" id="partes_envolvidas" placeholder="Inserir Partes Envolvidas"><br><br>

                <label for="data_registro">Data de Registro:</label>
                <input type="date" name="data_registro" id="data_registro" placeholder="Inserir Data de Registro"><br><br>

                <label for="tabeliao_responsavel">Tabeliao Responsavel:</label>
                <input type="text" name="tabeliao" id="tabeliao" placeholder="Inserir Tabeliao"><br><br>

                <input type="submit" name="submit" id="submit">
                

           
      
         </div>
         </form>
    </main>
</body>
</html>
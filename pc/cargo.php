<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$sqlCargo = "select cd_Cargo,nm_Cargo from tbl_Cargo";
$linhas = mysqli_query($conexao, $sqlCargo); // executando variavel $sql

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">


<title>Area Restrita Project Centre</title>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Cargo</h1>
        
            <form name="frmCargo" method="post" action="inscargo.php">
                <input type="text" name="txtCargo" placeholder="Nome do cargo"><br>
                <input type="text" name="txtValor" placeholder="Valor do cargo"><br><br>                
                <input type="submit" value="Cadastrar" class="botAzul"><br>

            </form>
    </div>
</body>
</html>


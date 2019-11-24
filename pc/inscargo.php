<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$nome_Cargo = $_POST['txtCargo']; // criando variavel que vai receber dados digitados em txtCargo
$valor_Cargo = $_POST['txtValor']; // criando variavel que vai receber dados digitados em txtValor


// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sqlCargo = "insert into tbl_Cargo(nome_Cargo,valor_Cargo)values('$nome_Cargo','$valor_Cargo')";
$query = mysqli_query($conexao, $sqlCargo); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucesso.php');
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>
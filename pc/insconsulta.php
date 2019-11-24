<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$nome_Consultor = $_POST['txtNome']; // criando variavel que vai receber dados digitados em txtNome
$no_Telefone = $_POST['txtTelefone']; // criando variavel que vai receber dados digitados em txtTelefone
$Email = $_POST['txtEmail']; //criando variavel que vai receber dados digitados em txtEmail
$nome_Usuario = $_POST['txtUsuario'];
$Senha = $_POST['txtSenha'];
$nome_cargo = $_POST['txtCargo'];


// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sqlConsultor = "insert into tbl_Consultor(nome_Consultor,no_Telefone,Email,nome_Usuario,Senha,nome_cargo)values('$nome_Consultor','$no_Telefone','$Email','$nome_Usuario','$Senha','$nome_cargo')";
$query = mysqli_query($conexao, $sqlConsultor); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucesso.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.

?>
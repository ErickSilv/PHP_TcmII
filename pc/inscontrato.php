<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$nome_Contato = $_POST['txtContato']; 
$tel_Contrato = $_POST['txtTelefone']; 
$email_Contrato = $_POST['txtEmail'];
$logradouro = $_POST['txtLogradouro'];
$numero = $_POST['TxtNumeroLogradouro'];
$complemento = $_POST['txtComplemento'];
$bairro = $_POST['txtBairro'];
$cep = $_POST['txtCep'];
$cidade = $_POST['txtCidade'];
$estado = $_POST['txtEstado'];
$nome_projeto = $_POST['txtNomeprojeto'];
$prazo_Contrato = $_POST['txtTempo'];
$descr_projeto = $_POST['txtDescricao'];
$status_projeto = $_POST['txtStatus'];

// variável $sql recebe comando de inserção. 
// Insira na tabela contrato nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sqlContrato = "insert into tbl_contrato(nome_Contrato,tel_Contrato,email_Contrato,logradouro,numero,complemento,bairro,cep,cidade,estado,nome_projeto,prazo_Contrato,descr_projeto,status_projeto) values(default,'$nome_Contato','$tel_Contrato','$email_Contrato','$logradouro','$numero','$complemento','$bairro','$cep','$cidade','$estado','$nome_projeto','$prazo_Contrato','$descr_projeto','$status_projeto')";


$query = mysqli_query($conexao, $sqlContrato); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucesso.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>
<?php
include_once("conexao.php"); // incluindo arquivo de conexao.php

$sqlCargo = "select nome_Cargo from tbl_Cargo";
$linhas = mysqli_query($conexao, $sqlCargo); // executando variavel $sql

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">


<title>Area Restrita Project Centre</title>
<!--<script>
	function validaCampos(){
		var nomeCons = document.getElementsByName("txtNome").value;
		if(nomeCons == ""){
				alert("Favor informar o nome do consultor");
				document.frmConsultor.txtNome.focus();
				return false;
		}
		
		var nomeCons = document.getElementsByName("txtNome").length;
		if(nomeCons <= 5){
				alert("Favor informar o nome completo do consultor");
				document.frmConsultor.txtNome.focus();
				return false;
		}
	}

</script>-->
</head>
<body>

    <div class="container">
        <h1>Cadastro de Consultor</h1>
        
            <form name="frmConsultor" method="post" action="insconsulta.php" onSubmit="return validaCampos()">
                <input type="text" name="txtNome" placeholder="Nome do consultor"><br>
                <input type="text" name="txtTelefone" placeholder="Telefone do consultor"><br>
                <input type="text" name="txtEmail" placeholder="E-mail do consultor"><br>
				<input type="text" name="txtUsuario" placeholder="Usuário do consultor"><br>
				<input type="password" name="txtSenha" placeholder="Senha do consultor"><br>
                <input type="text" name="txtCargo" placeholder="Informe o cargo"><br>
				
                    <!--<select name="sltCargo">
					<option value="">Selecione Cargo</option>
                /*<?php
                    
						if (mysqli_num_rows($linhas) > 0) {
                           
						$query = "SELECT * FROM tbl_cargo";
                        $result = mysqli_query($query); 
                             
						while($dados = mysqli_fetch_array($linhas)){
                            echo "<table>";                            
							echo "<tr><td>".$dados['nome_Cargo']."</td></tr>";
                            
						}
                            
                	}
                     
					mysqli_close($conexao); // encerrando a conexão com banco de dados.
					?>
				</select>--><br><br>
                <input type="submit" value="Cadastrar" class="botAzul"><br>

            </form>
    </div>
</body>
</html>


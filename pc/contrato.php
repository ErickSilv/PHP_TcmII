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
        <h1>Cadastro de Contrato</h1>
        
            <form name="frmContrato" method="post" action="insContrato.php">
            
                <input type="text" name="txtContato" placeholder="Contato"><br>
                <input type="text" name="txtTelefone" placeholder="Telefone"><br>
                <input type="text" name="txtEmail" placeholder="E-mail"><br>
                
                <input type="text" name="txtLogradouro" placeholder="Logradouro"><br>
                <input type="text" name="TxtNumeroLogradouro" placeholder="Número"><br>                
                <input type="text" name="txtComplemento" placeholder="Complemento"><br>                
                <input type="text" name="txtBairro" placeholder="Bairro"><br>                
                <input type="text" name="txtCep" placeholder="CEP"><br>
                <input type="text" name="txtCidade" placeholder="Cidade"><br>
                <input type="text" name="txtEstado" placeholder="Estado"><br>

                <input type="text" name="txtNomeprojeto" placeholder="Nome do Projeto"/><br>
                <input type="text" name="txtTempo" placeholder="Tempo de execução"/><br>
                
                <input type="text" name="txtStatus" placeholder="Status do Projeto"><br>
                
				<textarea placeholder="Descrição do Projeto" name="txtDescricao"></textarea><br><br>
                
                <input type="submit" value="Cadastrar" class="botAzul"><br>
            </form>
        
    </div>


</body>
</html>


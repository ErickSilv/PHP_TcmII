<?php>

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reunião</title>
     <div>
	<!-- carregando a pagina topo através de um include -->
	<?php include_once("topo.php"); ?> 
	</div>
</head>
    <body>
        <div class="container">
        
        <h1>Reunião</h1>
        
            <form>
                
                <h4>Selecione a data</h4>
                 <input type="date" name="dateReuniao"/><br><br>
                 <input type="search" placeholder="Buscar"/><br>
                 <input type="text" name="txtAssunto" placeholder="Assunto Reunião"/><br>
                 <select name="sltEmpresa">
					<option value="empresa">Selecione a Empresa</option>
					<option value="1">Relampago mcqueen Auto Peças</option>
					<option value="2">Woody Hiper Lojas</option>
                    <option value="3">Bazz Laitir TI do Espaço</option>
					<option value="4">Pizza Planet</option><br>
                  <input type="text" name="txtEndereco" placeholder="Endereço"><br>   
                     
				</select>
                 <select name="sltStatus">
					<option value="">Selecione o projeto</option>
                    <option value="1">Ecomerce auto peças</option>
					<option value="2">Atualização de site</option>
                    <option value="3">Manutenção do sistema</option>
					<option value="4">Aplicação Mobile</option>
                     <option value="5">MAnutenção do Banco de Dados</option>
				</select><br>
                
                <p><b>Selecione os Consultores</b></p><br>
                    <div>
                       <div>
                        <input type="checkbox" id="Ana" name="Ana">
                        <label for="scales">Ana Cleia</label>
                        </div>
                    
                        <div>
                        <input type="checkbox" id="Leonardo" name="Leonardo">
                        <label for="scales">Leonardo</label>
                        </div>
                    
                       <div>
                        <input type="checkbox" id="Lucas" name="lucas">
                        <label for="scales">Lucas</label>
                        </div>
                    
                    <div>
                        <input type="checkbox" id="Erick" name="Erick">
                        <label for="scales">Erick</label>
                        </div>
                        </div><br>
				<textarea placeholder="Descrição da Reunião" name="txtDescricao"></textarea><br><br>
                
                <input type="submit" value="Agendar" class="botAzul"><br>
                
            </form>
        
        
        </div>
    
    </body>
    
</html>
<?php
    
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
    </head>
<body>
<input type="checkbox" id="btMenu">
	<label for="btMenu">&#9776;</label>
	<!-- Ao clicar sobre o link, será enviado um valor com passagem de parametro -->
	<nav class = "menu"> 
		<ul>
			<li><a href="#">Cadastro</a>
				<ul>
					<li><a href="arearestrita.php?pag=consultor.php">Consultor</a></li>
					<li><a href="arearestrita.php?pag=contrato.php">Contrato</a></li>
					<li><a href="arearestrita.php?pag=cargo.php">Cargo</a></li>
				</ul>
			</li>
			<li><a href="#">Consulta</a>
				<ul>
					<li><a href="consulta_contrato.php">Contrato</a></li>
                    <li><a href="consulta_projeto.php">Projeto</a></li>
                    <li><a href="cronograma.php">Cronograma</a></li>
                    <li><a href="consulta_consultor.php">Consultor</a></li>
                    
				</ul>
			</li>
			<li><a href="#">Demandas</a>
				<ul>
					<li><a href="#">Atividade</a></li>
					<li><a href="descricao.php">Descrição</a></li>
					<li><a href="demanda_contrato.php">Contrato</a></li>
					<li><a href="status.php">Status</a></li>
					<li><a href="demanda_consultor.php">Consultor</a></li>
                    <li><a href="reuniao.php">Reunião</a></li>
				</ul>
			</li>
			<li><a href="#">Relatório</a>
				<ul>
					<li><a href="pdf_contrato.php">CONTRATOS</a></li>
                    <li><a href="pdf_consultor.php">CONSULTOR</a></li>
                    <li><a href="pdf_projeto.php">PROJETOS</a></li>
					
				</ul>
			</li>
			<li><a href="sair.php">Sair</a></li>
		</ul>
	</nav>
    </body>
    </html>
    
    
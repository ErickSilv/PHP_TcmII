<?php
     function geraGrafico($largura, $altura, $valores, $referencias, $tipo = "p3"){
           $valores = implode(',', $valores);
           $referencias = implode('|', $referencias);
 
           return "http://chart.apis.google.com/chart?chs=". $largura ."x". $altura . "&amp;chd=t:" . $valores . "&amp;cht=p3&amp;chl=" . $referencias;
     }
            ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    
     <div>
	<!-- carregando a pagina topo através de um include -->
	<?php include_once("topo.php"); ?> 
	</div>

    
    <title>Cronograma</title>
    </head>
        
<body name="bCronograma">
    <div class="container">
        
        <form name="formCronograma">
            <div class="imgLogo">
            <img src="imagens/logoidigital.png" width="200" height="200" />
            </div>
            
            <div class='textCronograma'>
                <h1>CRONOGRAMA</h1>
            </div>
                 
        </form>
        
        <form class="Grafico">
            
               
     <?php $grafico = geraGrafico(720, 380, array("30", "22","40","8","10"), array("Ativas", "Fim","Inicio", "Pendentes","A Realizar")) ?>
    <img src="<?php echo $grafico ?>" title="Grafico gerado pelo Google Chart" /><br><br>
            
            <input type="submit" value="Gerar Relatório" class="botAzul"><br>
  
        </form>
        
    </div> 
    
    
    </body>
</html>
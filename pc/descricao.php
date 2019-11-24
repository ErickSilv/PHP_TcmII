<?php
include_once("conexao.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Siga iDigital</title>
      <div>
	<!-- carregando a pagina topo através de um include -->
	<?php include_once("topo.php"); ?> 
	</div>
  </head>
  <body><br><br><br>
       <div class="container">
  <h3 >PROJETOS</h3>
</div><br><br>
   <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Cod</th>
      <th scope="col">Projeto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
          <?php
            $result_projeto = "SELECT * FROM tbl_contrato";

            $resultado_projeto = mysqli_query($conexao, $result_projeto);

            while($row_projeto = mysqli_fetch_array($resultado_projeto)){
            echo"<tr>
                  <td>".$row_projeto['cod_Contrato']."</td>
                  <td>".$row_projeto['nome_projeto']."</td>
                  <td>".$row_projeto['descr_projeto']."</td>
                  </tr>";
            }
          ?>
          </tbody>
</table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    
    
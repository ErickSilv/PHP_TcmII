<?php 

    include_once("conexao.php");
 ?>
<!DOCTYPE html>
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

<body><br><br>
    <div id="tblconsultor">
        <table class="table table-bordered table-dark">
          <thead class="table-dark">
            <tr>
              <th>Cod</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
                <th>CNPJ</th>
                <th>Prazo/Vigência</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result_contrato = "SELECT * FROM tbl_contrato";

            $resultado_contrato = mysqli_query($conexao, $result_contrato);

            while($row_contrato = mysqli_fetch_array($resultado_contrato)){
            echo"<tr>
                  <td>".$row_contrato['cod_Contrato']."</td>
                  <td>".$row_contrato['nome_Contrato']."</td>
                  <td>".$row_contrato['email_Contrato']."</td>
                  <td>".$row_contrato['tel_Contrato']."</td>
                  <td>".$row_contrato['cnpj_Contrato']."</td>
                  <td>".$row_contrato['prazo_Contrato']."</td>
                </tr>";
            }
          ?>
          </tbody>
        </table>
  </div>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
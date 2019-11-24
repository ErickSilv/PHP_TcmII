<?php 

    include("./fpdf/fpdf.php");
    include_once("conexao.php");

$sql = ("SELECT * FROM tbl_contrato WHERE nome_Contato = '$_POST[nome_Contato]'");

$busca = mysqli_query($conexao,$sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('CONTRATOS'),0,0,"C");

$pdf->Image('./imagens/logoidigital.png',10,8,22);
$pdf->ln(15);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(70,7,'Empresa',1,0,"C");
$pdf->Cell(70,7,'CNPJ',1,0,"C");
$pdf->ln();


while ($resultado = mysqli_fetch_array($busca)){
    
    $pdf->Cell(70,7, $resultado['nome_Contrato'],1,0,"C");
    $pdf->Cell(70,0, $resultado['cnpj_Contrato'],1,0,"C");
    $pdf->ln();
}

?>
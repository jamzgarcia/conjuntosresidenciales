<?php
require('../lib/pdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Image('../img/logocr.png',10,12,22);
	$pdf->Cell(0,10,'Conjuntos_Residenciales.com','',0,'C');
	$pdf->Ln();
	$pdf->Cell(0,10,'Factura #','',0,'R');
	$pdf->Ln();
	$pdf->Cell(0,10,'000001','',0,'R');
	$pdf->Ln();
	$pdf->Cell(0,10,'NIT:83165338-5','',0,'C');
	
	$pdf->Ln();
	$pdf->Cell(0,10,'_________________________________________________________________________________________________','',0,'C');


	$pdf->Ln();
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(45,6,'Propietario:$datos_____________','','','LR');
	$pdf->Cell(55,6,'Banco: ','','','C');
	$pdf->Cell(30,6,' Bancolombia','','','R');
	$pdf->Ln();
	$pdf->Cell(45,6,'Concepto: _____________','','','LR');
	$pdf->Cell(70,6,'Tipo de cuenta: ','','','C');
	$pdf->Cell(40,6,' Corriente # 351254789654','','','R');
	$pdf->Ln();
	$pdf->Cell(255,10,'Ahorros # 895412365412','','','C');
	$pdf->Ln();
	$pdf->Cell(45,6,'Apartamento:____','','','LR');
	$pdf->Cell(60,6,'Cuenta Cobro # 7854','','','R');
	$pdf->Ln();

	$pdf->Ln();
	$pdf->SetFont('Arial','',12);
	$pdf->Ln();	

	$pdf->Cell(45,6,'Pagar hasta:','','','LR');
	$pdf->Cell(45,6,'dia:_____mes:_____ ano:_____','','','LR');

	$pdf->Cell(255,80,'Valor a pagar:','','','LR');
	$pdf->Cell(255,80,'________________','','','LR');

	$pdf->Ln();
	$pdf->Cell(45,6,'Identificacion:','','','LR');
	$pdf->Cell(45,6,'________________','','','LR');
	$pdf->Ln();
	$pdf->Cell(45,6,'Depositante:','','','LR');
	$pdf->Cell(45,6,'________________','','','LR');


$pdf->Output();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<button type="submit">Imprimir</button>
</body>
</html>

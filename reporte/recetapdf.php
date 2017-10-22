<?php

	$id = $_GET['id'];

require('../fpdf/fpdf.php');
require('../funcs/conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 15);
$pdf->Image('recursos/logo.png' , 10 ,10, 10, 10,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Bernardos Pet System', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);


$pdf->Cell(100, 8, 'RECETA', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT * FROM tbl_receta where id_receta= '$id' ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;


	 $id_rec=$productos2['id_receta'];
	 $paciente=$productos2['nombre_paciente'];
	 $rece=$productos2['prescripcion'];
	 $fecha=$productos2['fecha_receta'];

	
	
}


$pdf->Cell(100, 8,'Nombre Mascota: '.$paciente , 0);
$pdf->Cell(100, 8,'Fecha: '.$fecha , 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, 'RX: '.$rece ,100);


$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);

$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);


$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte.pdf','D');
?>
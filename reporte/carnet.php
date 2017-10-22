<?php

require('../fpdf/fpdf.php');
require('../funcs/conexion.php');
session_start();
    $carnet=$_SESSION['carnet'];

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
$pdf->Cell(100, 8, 'Carnet de control de vacunas', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'Id', 0);
$pdf->Cell(30, 8, 'Mascota', 0);
$pdf->Cell(30, 8, 'Vacuna ', 0);
$pdf->Cell(25, 8, 'Cant. CC/ML', 0);
$pdf->Cell(48, 8, 'Descripcion', 0);
$pdf->Cell(25, 8, 'Vacuna Aplicada', 0);
$pdf->Cell(25, 8, 'Proxima Aplicacion', 0);

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT * FROM tbl_vacunas inner join tbl_tipvacunas on tbl_vacunas.id_tipovacuna = tbl_tipvacunas.id_tipovacuna inner join tbl_mascotas on tbl_vacunas.id_mascota = tbl_mascotas.id_mascota where tbl_vacunas.id_mascota='$carnet' ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	
	$pdf->Cell(10, 8, $productos2['id_vacuna'], 0);
	$pdf->Cell(30, 8, $productos2['nom_mascota'], 0);
	$pdf->Cell(30, 8,  $productos2['nombre'], 0);
	$pdf->Cell(25, 8, $productos2['ccml'], 0);
	$pdf->Cell(48, 8, $productos2['descripcion'], 0);
    $pdf->Cell(25, 8, date('d/m/Y', strtotime($productos2['aplicada'])), 0);
    $pdf->Cell(25, 8, date('d/m/Y', strtotime($productos2['proxima'])), 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte.pdf','D');
?>
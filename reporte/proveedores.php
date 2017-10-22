<?php

if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
	$hasta = $_GET['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
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
$pdf->Cell(100, 8, 'Listado de Proveedores Registrados', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(60, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 8);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'ID', 0);
$pdf->Cell(20, 8, 'RTN', 0);
$pdf->Cell(30, 8, 'Nombre Empresa', 0);
$pdf->Cell(35, 8, 'Telefonos ', 0);
$pdf->Cell(35, 8, 'Direccion', 0);
$pdf->Cell(25, 8, 'Representante', 0);
$pdf->Cell(25, 8, 'Correo', 0);


$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT id_proveedor, nom_empresa, num_tel1, num_tel2, direccion, RTN, tipo, representante, cor_empresa, fecha_registro  FROM tbl_proveedores WHERE fecha_registro BETWEEN '$desde' AND '$hasta' order by id_proveedor ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	
	$pdf->Cell(10, 8, $productos2['id_proveedor'], 0);
    $pdf->Cell(20, 8, $productos2['RTN'], 0);
	$pdf->Cell(30, 8, $productos2['nom_empresa'], 0);
	$pdf->Cell(35, 8,  $productos2['num_tel1']." | | ".$productos2['num_tel2'], 0);	
	$pdf->Cell(35, 8, $productos2['direccion'], 0);    
    $pdf->Cell(25, 8, $productos2['representante'], 0);
    $pdf->Cell(25, 8, $productos2['cor_empresa'], 0);	
	
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte de proveedores.pdf','D');
?>
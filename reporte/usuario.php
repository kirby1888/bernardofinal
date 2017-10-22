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
$pdf->Cell(100, 8, 'Listado de Usuarios Registrados', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(60, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 8);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'Id', 0);
$pdf->Cell(30, 8, 'Nombres', 0);
$pdf->Cell(30, 8, 'Usuario ', 0);
$pdf->Cell(25, 8, 'Rol', 0);
$pdf->Cell(48, 8, 'Correo_Electronico', 0);
$pdf->Cell(25, 8, 'Estado_usuario', 0);
$pdf->Cell(25, 8, 'Fecha_Creacion', 0);

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT id_usuario, nombre_usuario, usuario, rol, correo_electronico, estado_usuario,tbl_usuario.fecha_creacion FROM tbl_usuario inner join tbl_roles on tbl_usuario.id_rol = tbl_roles.id_rol WHERE tbl_usuario.fecha_creacion BETWEEN '$desde' AND '$hasta' order by id_usuario ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	
	$pdf->Cell(10, 8, $productos2['id_usuario'], 0);
	$pdf->Cell(30, 8, $productos2['nombre_usuario'], 0);
	$pdf->Cell(30, 8,  $productos2['usuario'], 0);
	$pdf->Cell(25, 8, $productos2['rol'], 0);
	$pdf->Cell(48, 8, $productos2['correo_electronico'], 0);
    $pdf->Cell(25, 8, $productos2['estado_usuario'], 0);
   
	
	$pdf->Cell(25, 8, date('d/m/Y', strtotime($productos2['fecha_creacion'])), 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte.pdf','D');
?>
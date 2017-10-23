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
$pdf->Cell(100, 8, 'Listado de compras/salidas Registradas', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(60, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 8);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'Id', 0);
$pdf->Cell(30, 8, 'Transaccion', 0);
$pdf->Cell(20, 8, 'Fecha ', 0);
$pdf->Cell(20, 8, 'Codigo', 0);
$pdf->Cell(25, 8, 'Producto', 0);
$pdf->Cell(25, 8, 'Tipo', 0);
$pdf->Cell(25, 8, 'Unidad', 0);
$pdf->Cell(25, 8, 'Cantidad', 0);
$pdf->Cell(25, 8, 'Stock', 0);


$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT a.tipo_transaccion,a.no,a.id_proveedor, a.codigo_transaccion,a.fecha,a.codigo,a.stock,a.numero,b.codigo_producto,b.nombre_producto,b.unidad FROM transaccion_medicamentos as a INNER JOIN products as b ON a.codigo=b.codigo_producto WHERE a.fecha BETWEEN '$desde' AND '$hasta' order by a.no ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	$pdf->Cell(10, 8, $productos2['no'], 0);
	$pdf->Cell(30, 8, $productos2['codigo_transaccion'], 0);
	$pdf->Cell(20, 8, $productos2['fecha'], 0);
	$pdf->Cell(20, 8, $productos2['codigo'], 0);
    $pdf->Cell(25, 8, $productos2['nombre_producto'], 0);
    $pdf->Cell(25, 8, $productos2['tipo_transaccion'], 0);
    $pdf->Cell(25, 8, $productos2['unidad'], 0);
          $pdf->Cell(25, 8, $productos2['numero'], 0);
      $pdf->Cell(25, 8, $productos2['stock'], 0);
	
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte de compras.pdf','D');
?>
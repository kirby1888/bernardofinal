<?php 

require 'conexion.php';
require 'funcs.php';

session_start();
			  

if (empty($_POST['masco'])){
				echo json_encode("seleccione una mascota");
        } elseif (empty($_POST['fecha'])){
           	echo json_encode("seleccione una fecha de atencion");
		} elseif (empty($_POST['motivo'])){
		 	echo json_encode( "Motivo de consulta");
        } elseif (empty($_POST['sintomas'])) {
            echo json_encode( "describa los sintomas de la mascota");	
        } elseif (empty($_POST['tratamientos'])) {
             echo json_encode( "describa si hubieron tratamientos previos");	
        } elseif (empty($_POST['dieta'])) {
           	echo json_encode( "describa la dieta de la mascota");
        } elseif (empty($_POST['peso'])) {
                  echo json_encode( "cual es el peso de la mascota???");    
    

   } elseif (empty($_POST['peso'])) {
                  echo json_encode( "cual es el peso de la mascota???");    
    

   }
			
elseif (
			
			
			
			
			 !empty($_POST['motivo'])

           
           

        ) {



$trata=$_POST['tratamientos']; 

$moti=$_POST['motivo'];
$mascota=$_POST['masco'];
$fec=$_POST['fecha'];
$sin=$_POST['sintomas'];
$peso=$_POST['peso'];
$tem=$_POST['temperatura'];
$tl=$_POST['TLLC'];
$fcc=$_POST['frc'];
$frr=$_POST['fr'];
$acti=$_POST['act'];
$cond=$_POST['condi'];
$mem=$_POST['membra'];
$hidra=$_POST['hn'];
$pa=$_POST['patron'];
$estado=$_POST['estado'];
$die=$_POST['dieta'];    
    $_SESSION['mascota']=$mascota;
    $sentencia = $mysqli->prepare("INSERT INTO tbl_consulta (id_mascota,motivo,sintomas,tratamientos,dieta,peso,temperatura,fc,fr,condicion,membranas,hidratacion,patron,TLLC) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$sentencia->bind_param("isssssssssssss", $mascota,$moti,$sin,$trata,$die,$peso,$tem,$fcc,$frr,$cond,$mem,$hidra,$pa,$tl);
    	
	$isOk= $sentencia->execute();

	$sentencia->free_result();
	$sentencia->close();
	if($isOk)
		echo json_encode("ok");
	else
		echo json_encode("error");
}
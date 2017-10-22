<?php

session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';

if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();   
}else{
	header ("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Usuarios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/es.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">
<link href="css/font-awesome1.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<style type="text/css">
	select{
		height: 40px !important;
	}
</style>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>

<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<!-- Inicio header -->
				<?php include("menu.php"); ?>

</head>

<body>
   

   
		<div class="about-heading">	
			<div class="con">
			clientes
			
		</div>
	</div>
	
	
	<!-- //banner -->
	<!-- contact -->
	<!-- //banner -->
	<!-- contact -->
	 <div class="container">
		<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Clientes</h4>
		</div>			
			<div class="panel">
			<?php
			require 'modal/editar_cliente.php';
require 'modal/registro_cliente.php';

	
			?>
			
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
					  <input type="date" id="bd-desde" onchange="hasta" /><input type="date" id="bd-hasta"  /><a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Consulta a PDF</a>
				
			</form>
			
			</div>
			
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
						
		</div>

	</div>
	
	</body>
	
  </html>
  <script>
 function obtener_datos(Id,Nom,Apellido,Cel,Tel,Correo,Direccion,Membresia){
		
				
			$("#identidad").val(Id);
	        $("#nombre").val(Nom);
			$("#apellido").val(Apellido);
	 		$("#celular").val(Cel);
	  		$("#telefono").val(Tel);
			$("#correo_electronico").val(Correo);
	 $("#direccion").val(Direccion);
	  $("#membresia").val(Membresia);
	      
 }
	  
	  

	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_usuariossss.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
				load(1);
			
		  }
		 
	});
  event.preventDefault();
})
	  
	  
	  $( "#editar_usuario" ).submit(function( event ) {
  $('#actualizar_datos2').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_usuarios.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos2').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})





	
	  
	 	$(document).ready(function(){
			load(1);
		});

		function load(page){
		
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/buscar.php',
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(data){
			$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
		}
	});
	return false;
	});
	
	  
	  
	  $('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(data){
			$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
		}
	});
	return false;
	});
	
	
		
function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('productos.php?desde='+desde+'&hasta='+hasta);
}


	
	 </script>
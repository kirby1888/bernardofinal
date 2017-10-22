
<?php


require 'funcs/conexion.php';
require 'funcs/funcs.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Servicios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<link href="css/es1.css" rel="stylesheet" type="text/css" media="all" />
<!-- css -->
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/usuarios.js"></script>
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


   

   
		<div class="about-heading">	
			<div class="con">
			    SERVICIOS
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
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick='obtener_id("<?php echo $id_mascota;?>" )'>
<span class="glyphicon glyphicon-plus"/>
Nuevo Servicio
</button>
</div>

			<h4><i class='glyphicon glyphicon-search'></i> Buscar Servicio</h4>

		</div>			
			<div class="panel">
		<form>
		

				<center>
			      <i class='glyphicon glyphicon-share'  title="salir de la consulta" onclick="load(1)"></i>

				  <input type="date" id="bd-desde"  /><input type="date" id="bd-hasta"  /><a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Consulta a PDF</a>
				</center>
				      <body>
 <form action="validar_checkbox.php" method="post">
 <table width="28%" border="1" align="center">
     
			
			     
			                  
               
           
                     </tbody>
			</form>
			
		
				<?php
	require 'modal/editar_servicio.php';
require 'modal/registro_servicio.php';
require 'modal/eliminar_servicio.php';

		  
			?>
						
			</div>
			<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			
		</div>


	<!-- footer -->
	<!-- copyright -->
	
	<!-- //copyright -->
	<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->

</html>

  <script>


	  function
	  capturar(item){
		
				
			$("#can").val(item);
	        
	      
 }
	  
	  
	  
$( "#editar_password" ).submit(function( event ) {
  $('#actualizar_datos3').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/eliminar_servicio.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax3").html(datos);
			$('#actualizar_datos3').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})	  
	  
	function obtener_datos(candi,nom_producto,pre_producto){
     
			
			$("#candi").val(candi);
			$("#nombre_producto").val(nom_producto);
			$("#precio_producto").val(pre_producto);
			
		}

  

	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_servicio.php",
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
			url: "ajax/editar_servicio.php",
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
				url:'ajax/buscar_servicio.php',
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
		var url = 'ajax/buscar_servicios_fecha.php';
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
		var url = 'ajax/buscar_servicios_fecha.php';
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
	window.open('reporte/reservicios.php?desde='+desde+'&hasta='+hasta);
}


	
	 </script>
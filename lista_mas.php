<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	$errors =array();
	if(empty($_GET['user_id'])){
	
	}
	

	$user_id = $_GET['user_id'];
	


	

$nombre=getCliente("nom_cliente","id_cliente",$user_id);

	









?>
<!DOCTYPE html>

<html>

	<head>
		<title>Cambiar Password</title>
		
		 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/es1.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">
    	<?php include("menu.php"); ?>

	</head>
	
		<div class="about-heading">	
			<div class="con">
			   Listar Mascotas de <?php echo $nombre;?>
		</div>
	</div>
	
	<body>
		   
     <div class="container">
     
     
     
      <div  class="panel">
       
       <div class="panel-heading">
       
       <div class="btn-group pull-left">
       	<li><a href='cliente.php'></a></li>

<span class="glyphicon glyphicon-share"/>
REGRESAR
</button>
</div>
<h4>
<span class="glyphicon glyphicon"/>
</h4>
       <li>
     
      </div>
    
      
     <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>ID</th>
            
            <th>NOMBRE</th>
            <th>ESPECIE </th>
             <th>RAZA</th>
			 <th>DESCRIPCION</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
			
			
			

  			 $sql = "SELECT * FROM tbl_mascotas where id_cliente= '$user_id'" ;

			$query = mysqli_query($mysqli, $sql);
     
		
			
 
          if(mysqli_num_rows($query)>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			
			
			
			               $id=$row['id_mascota'];
					
						$nom=$row['nom_mascota'];
				        $cel=$row['especie'];
			            $tel=$row['raza'];
			           $correo=$row['nacimiento'];
			  $des=$row['descripcion'];
			          
          ?>
             
             
             
             
             
             
             
             
             
       
             
             
              <tr>
                <td><?php echo $id ?></td>
             
                <td><?php echo $nom;?></td>
                <td><?php echo $cel ;?></td>
                 <td><?php echo $tel;?></td>
                  <td><?php echo  $des;?></td>
            
              </tr>
          <?php
            
           }
          }else{ 
          
          ?>
          <tr>
            <td colspan="4">No se encontraron resultados</td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div>
      </div>
      
      </div>
      
      
    <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
    </div>
	
	</body>
</html>	


  <?php
				
				
			include("modal/registro_mascotas.php");
			include("modal/editar_usuarios.php");
				require 'modal/eliminar_usuario.php';
	
			?>  
			
		
	
  <script>

	  function
	  obtener_id(item){
		
				
			$("#hola").val(item);
	        
	      
 }
	  
	  


	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_mascotas.php",
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
	  
	  





	
	  
	 	$(document).ready(function(){
			load(1);
		});

		

$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'ajax/buscar_usuario_fecha.php';
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
		var url = 'ajax/buscar_usuario_fecha.php';
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
	
	
		



	
	 </script>
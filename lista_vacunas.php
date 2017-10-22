<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	$errors =array();
	if(empty($_GET['id'])){
	
	}
	
	$id = $_GET['id'];
	

$nombre=getMascota("nom_mascota","id_mascota",$id);

?>
<!DOCTYPE html>

<html>

	<head>
		<title>Control de vacunacion</title>
		
		 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/es1.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">
    	<?php include("menu.php"); ?>

	</head>
	
		<div class="about-heading">	
			<div class="con">
			   Control de vacunas de <?php echo $nombre;?>
		</div>
	</div>
	
	<body>
		   
     <div class="container">
     
     
     
      <div  class="panel">
       
       <div class="panel-heading">
       
       <div class="btn-group pull-left">
       	<li><a href='mascota.php'></a></li>

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
            <th>TIPO</th>
             <th>CANTIDAD CC/ML</th>
			 <th>DESCRIPCION</th> 
             <th>APLICADA</th> 
             <th>PROXIMA</th> 
          </tr>
        </thead>
        <tbody>
          <?php
			
			
			

  			 $sql = "SELECT * FROM tbl_vacunas where id_vacuna= '$id'" ;

			$query = mysqli_query($mysqli, $sql);
     
		
			
 
          if(mysqli_num_rows($query)>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			
			
			
			               $id=$row['id_vacuna'];
					
						$tipo=$row['id_tipovacuna'];
				        $cclm=$row['cc/ml'];
			            $descripcion=$row['descripcion'];
			           $aplicada=$row['aplicada'];
			            $proxima=$row['proxima'];
			          
          ?>
            
              <tr>
                <td><?php echo $id ?></td>
             
                <td><?php echo $tipo;?></td>
                <td><?php echo $ccml ;?></td>
                 <td><?php echo $descripcion;?></td>
                  <td><?php echo $apliacada;?></td>
                 <td><?php echo $proxima;?></td>
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
 
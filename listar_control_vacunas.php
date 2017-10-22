<?php
	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	$errors =array();

	if(empty($_GET['user_id'])){
	
	}
	
	$user_id = $_GET['user_id'];
	$_SESSION['carnet']=$user_id;
    $carnet=$_SESSION['carnet'];
$nombre=getMascota("nom_mascota","id_mascota",$user_id);

?>
<!DOCTYPE html>

<html>

	<head>
		<title>Carnet de vacunas</title>
		
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
      	<a href='mascota.php'><button> REGRESAR </button></a>
       </div>
             
      <div class="btn-group pull-right">
				<a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Imprimir carnet</a>
			</div>
				<br>
			
       <li>
     
      </div>
    
      
     <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>ID</th>
            <th>VACUNA</th>
            <th>MASCOTA</th>
             <th>CANTIDAD DE CC/ML</th>
			 <th>DESCRIPCION</th>
            <th>APLICADA</th>
            <th>PROXIMA</th>
          </tr>
        </thead>
        <tbody>
         <?php
				
			 $sql = "SELECT * FROM tbl_vacunas inner join tbl_tipvacunas on tbl_vacunas.id_tipovacuna = tbl_tipvacunas.id_tipovacuna inner join tbl_mascotas on tbl_vacunas.id_mascota = tbl_mascotas.id_mascota where tbl_vacunas.id_mascota='$user_id'";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_vacunas  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			           $id_vacuna=$row['id_vacuna'];
			            $id_tipovacuna=$row['id_tipovacuna'];
                        $nombre=$row['nombre'];
                        $id_mascota=$row['id_mascota'];
                        $nom_mascota=$row['nom_mascota'];
						$ccml=$row['ccml'];
			            $descripcion=$row['descripcion'];
						$aplicada=$row['aplicada'];
                        $aplicada= date('d/m/Y', strtotime($aplicada));
				        $proxima=$row['proxima'];
                        $proxima= date('d/m/Y', strtotime($proxima));
                       
			         		           
          ?>
                      
              <tr>
              <td><?php echo $id_vacuna; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $nom_mascota;?></td>
                <td><?php echo $ccml; ?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $aplicada;?></td>
                <td><?php echo $proxima;?></td>

                <td>
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
	
  <script>

	 
	function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('reporte/carnet.php?user_id=<?php echo $carnet;?>');
}
			
	 </script>
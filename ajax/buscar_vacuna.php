<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'10');	
$eliminacion=getPer('permiso_eliminacion',$rol,'10');
		
?>

    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_tipvacunas order by id_tipovacuna ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_tipvacunas  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			            $id_tipo=$row['id_tipovacuna'];
			            $nombre=$row['nombre'];
						$descripcion=$row['descripcion'];

			           
          ?>
                      
              <tr>
              <td><?php echo $id_tipo; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $descripcion;?></td>

                <td>
                      <?php
				if ($actualizacion==1 ){?>
                  <a href="#" class='btn btn-default' title='Editar vacuna'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_tipo;?>" , "<?php echo $nombre ;?>", "<?php echo $descripcion; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                      
                   <?php
				if ($eliminacion==1 ){?>
                  	 <a href="#" class='btn btn-default' title='Eliminar vacuna'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_tipo;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                  <?php } ?>
                 
                </td>
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
     
      </div>
    <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    <script src="js1/dataTables.bootstrap.js"></script>
    <script src="js1/validator.js"></script>
    <script src="js1/global.js"></script>
     
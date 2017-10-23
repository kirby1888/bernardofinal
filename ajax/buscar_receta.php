<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'2');	
$eliminacion=getPer('permiso_eliminacion',$rol,'2');
		
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
            <th>Mascota</th>
            <th>Prescripcion</th>
            <th>Fecha </th>
<<<<<<< HEAD
            <th> Gestion Acciones</th>
=======
            <th>Gestion_Acciones</th>
>>>>>>> master
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_receta order by id_receta ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_receta");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			            $id_parametro=$row['id_receta'];
			            $parametro=$row['nombre_paciente'];
						$valor=$row['prescripcion'];
				        $fecha_creacion=$row['fecha_receta'];
                        $fecha_creacion = date('d/m/Y', strtotime($fecha_creacion));
			           
          ?>
                      
              <tr>
              <td><?php echo $id_parametro; ?></td>
                <td><?php echo $parametro; ?></td>
                <td><?php echo $valor;?></td>
                <td><?php echo $fecha_creacion;?></td>

                <td>
                    
                    <a href="#" class='btn btn-default' title='Descargar factura' onclick="reportePDF('<?php echo $id_parametro;?>');"><i class="glyphicon glyphicon-download"></i></a> 
                      <?php
				if ($actualizacion==1 ){?>  <?php } ?>
                  <a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_parametro;?>" , "<?php echo $parametro ;?>", "<?php echo $valor; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                
                     	 <a href="#" class='btn btn-default' title='Eliminar parametro'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_parametro;?>" )' ><i class="glyphicon glyphicon-remove"></i></a>  
                   <?php
				if ($eliminacion==1 ){?>
                  
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
     
<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'22');	
$eliminacion=getPer('permiso_eliminacion',$rol,'22');
		
?>

       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
             <th>ID</th> 
             <th>MASCOTA</th>
             <th>MOTIVO</th>
             <th>SINTOMAS</th>
			 <th>TRATAMIENTO</th> 
             <th>FECHA</th>   
             <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_consulta inner join tbl_mascotas on tbl_consulta.id_mascota = tbl_mascotas.id_mascota order by id_consulta ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_consulta ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			            $id_consulta=$row['id_consulta'];
                        $id_mascota=$row['id_mascota'];
                        $nom_mascota=$row['nom_mascota'];
						$motivo=$row['motivo'];
                        $sintomas=$row['sintomas'];
                        $tratamientos=$row['tratamientos'];
                    
                        $fecha_registro=$row['fecha_registro'];
			           
                        
          ?>
                      
              <tr>
                <td><?php echo $id_consulta; ?></td>
                <td><?php echo $nom_mascota; ?></td>
                <td><?php echo $motivo;?></td>
                <td><?php echo $sintomas; ?></td>
                <td><?php echo $tratamientos;?></td>
                
                <td><?php echo $fecha_registro;?></td>
                

                <td>
                      <?php
				if ($actualizacion==1 ){?>
                  <a href="#" class='btn btn-default' title='Editar consulta'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_consulta;?>","<?php echo $id_mascota;?>","<?php echo $motivo;?>","<?php echo $sintomas;?>","<?php echo $tratamientos;?>" )' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                      
                   <?php
				if ($eliminacion==1 ){?>
                  	 <a href="#" class='btn btn-default' title='Eliminar consulta'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_consulta;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
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
     
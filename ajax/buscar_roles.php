<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';

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
            <th>Rol</th>
            <th>Descripción</th>
            <th>Fecha creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_roles order by id_rol ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_roles  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			            $id_rol=$row['id_rol'];
			            $rol=$row['rol'];
						$descripcion=$row['descripcion'];
				        $fecha_creacion=$row['fecha_creacion'];
                        $fecha_creacion = date('d/m/Y', strtotime($fecha_creacion));
			           
          ?>
                      
              <tr>
              <td><?php echo $id_rol; ?></td>
                <td><?php echo $rol; ?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $fecha_creacion;?></td>

                <td>
               
                   
                      
                  <a href="#" class='btn btn-default' title='Editar Rol'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_rol;?>" , "<?php echo $rol ;?>", "<?php echo $descripcion; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  
                  	 <a href="#" class='btn btn-default' title='Eliminar rol'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_rol;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                  
               
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
     
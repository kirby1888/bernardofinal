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
            <th>Id_cliente</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza </th>
            <th>Sexo</th>
            <th>Nacimiento</th>
            <th>Descripcion</th>
            <th>Fecha_Registro</th>
            <th>GestionarAcciones</th>
          </tr>
        </thead>
        <tbody>
          <?php		

  
			
			 $sql = "SELECT * FROM tbl_mascotas";

			$query = mysqli_query($mysqli, $sql);
     
			
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_mascotas  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
 
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			
			
			    $id_mascota=$row['id_mascota'];
			    $id_cliente=$row['id_cliente'];
				$nom_mascota=$row['nom_mascota'];
				$especie=$row['especie'];
				$raza=$row['raza'];
			    $sexo=$row['sexo'];
			    $nacimiento=$row['nacimiento'];                
                $descripcion=$row['descripcion'];
                $fecha_registro=$row['fecha_registro'];
                $fecha_registro= date('d/m/Y', strtotime($fecha_registro));
          
               
			   
          ?>
            
             
              <tr>
              <td><?php echo $id_mascota ?></td>
              <td><?php echo $id_cliente ?></td>
              <td><?php echo $nom_mascota;?></td>
              <td><?php echo $especie;?></td>
              <td><?php echo $raza;?></td>
              <td><?php echo $sexo;?></td>
              <td><?php echo $nacimiento;?></td>
              <td><?php echo $descripcion;?></td>
              <td><?php echo $fecha_registro;?></td>
              <td>
              
               <a href="listar_control_vacunas.php?user_id=<?php echo $id_mascota;?>" data-toggle="tooltip" title="Ver control de vacunas"  class='btn btn-warning'><span class="glyphicon glyphicon-list"></span></a>
              
              
                
            <a href="#" class='btn btn-primary' title='Editar mascota'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_mascota;?>", "<?php echo $id_cliente;?>", "<?php echo $nom_mascota;?>", "<?php echo $especie ?>", "<?php echo $raza ?>","<?php echo $sexo ?>","<?php echo $nacimiento ?>","<?php echo $descripcion ?>","<?php echo $fecha_registro ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                        
                         <a href="#" class='btn btn-default' title='Eliminar Mascota'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_mascota ?>" )' ><i class="glyphicon glyphicon-remove"></i></a>
                  	    
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
     
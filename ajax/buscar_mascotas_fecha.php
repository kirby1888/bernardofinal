<?php

include('../funcs/conexion.php');

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA





?>




<div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>Id</th>            
            <th>Id_Cliente</th>
            <th>Nombre </th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>F_Nacimiento</th>
            <th>Descripcion</th>
            <th>F_Registro</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro ="SELECT * FROM tbl_mascotas WHERE fecha_registro BETWEEN '$desde' AND '$hasta' ORDER BY id_mascota ASC";
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
		                $id_mascota=$row['id_mascota'];
						$id_cliente=$row['id_cliente'];
						$nom_mascota=$row['nom_mascota'];
				        $especie=$row['especie'];
			            $raza=$row['raza'];
			            $sexo=$row['sexo'];
                        $fecha_nacimiento=$row['fecha_nacimiento'];
			            $descripcion= $row['descripcion'];
			            $fecha_registro=$row['fecha_registro'];
		
?>
		 <tr>
                <td><?php echo $id_mascota;?></td>             
                <td><?php echo $id_cliente;?></td>
                <td><?php echo $nom_mascota;?></td>
                <td><?php echo $especie;?></td>
                <td><?php echo $raza;?></td>
                <td><?php echo $sexo;?></td>
                <td><?php echo $fecha_nacimiento;?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $fecha_registro;?></td>
                <td>
              
                  <a href="?modulo=cliente&accion=eliminar&id=<?php echo $id_mascota;?>" data-toggle="tooltip" title="Eliminar cliente"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                  <a href="?modulo=mascota&accion=listar&idCliente=<?php echo $id_mascota;?>" data-toggle="tooltip" title="Listar mascotas"><span class="glyphicon glyphicon-list"></span></a>
                  
                  
                  	<a href="#" class='btn btn-default' title='Editar mascota'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_mascota;?>" , "<?php echo $id_cliente;?>" , "<?php echo $nom_mascota; ?>", "<?php echo $especie; ?>", "<?php echo $raza; ?>","<?php echo $sexo; ?>","<?php echo $fecha_nacimiento ?>","<?php echo $descripcion; ?>","<?php echo $fecha_registro; ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
            <a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal3" onclick='obtener_datos("<?php echo $cel;?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
            
						
               
               
             
               
               
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
     
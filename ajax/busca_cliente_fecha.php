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
            
            <th>Nombre</th>
            <th>Telefonos </th>
             <th>Correo</th>
                <th>fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro ="SELECT * FROM tbl_clientes WHERE fecha_registro BETWEEN '$desde' AND '$hasta' ORDER BY id_cliente ASC";
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
		                $id=$row['identidad'];
						$apellido=$row['ape_cliente'];
						$nom=$row['nom_cliente'];
				        $cel=$row['celular'];
			            $tel=$row['telefono'];
			           $correo=$row['cor_cliente'];
                  $fecha=$row['fecha_registro'];
			           $membresia= $row['membresia'];
			           $direccion=$row['direccion'];
		
?>
		 <tr>
                <td><?php echo $id ?></td>
             
                <td><?php echo $nom." ". $apellido;?></td>
                <td><?php echo $cel." || ".$tel;?></td>
                 <td><?php echo $correo;?></td>
                  <td><?php echo $fecha;?></td>
                <td>
              
                  <a href="?modulo=cliente&accion=eliminar&id=<?php echo $id;?>" data-toggle="tooltip" title="Eliminar cliente"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                  <a href="?modulo=mascota&accion=listar&idCliente=<?php echo $id;?>" data-toggle="tooltip" title="Listar mascotas"><span class="glyphicon glyphicon-list"></span></a>
                  
                  
                  	<a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id;?>" , "<?php echo $nom ?>", "<?php echo $apellido ?>", "<?php echo $cel ?>","<?php echo $tel ?>","<?php echo $correo ?>","<?php echo $direccion ?>","<?php echo $membresia ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
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
     
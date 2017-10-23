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
     
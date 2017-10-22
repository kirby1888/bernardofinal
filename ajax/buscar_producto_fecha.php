<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';


if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'13');	
$eliminacion=getPer('permiso_eliminacion',$rol,'13');

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
            <th>Id Producto</th>            
            <th>Codigo</th>
            <th>Nombre </th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Tipo</th>
            <th>Estatus</th>
            <th>Fecha Registro</th>
            <th>Gestionar</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro ="SELECT * FROM products WHERE date_added BETWEEN '$desde' AND '$hasta' ORDER BY date_added ASC";
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
		                $id_compra=$row['id_producto'];
						$id_proveedor=$row['codigo_producto'];
         $nombre=$row['nombre_producto'];
						$descripcion=$row['precio_producto'];
				        $cantidad=$row['cant'];
			            $precio=$row['tipo'];
			            $total=$row['status_producto'];
                        $fecha_registro=$row['date_added'];
			            
			           
		
?>
		 <tr>
                <td><?php echo $id_compra ?></td>
             
                <td><?php echo $id_proveedor;?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $nombre;?></td>
                 <td><?php echo $cantidad;?></td>
                  <td><?php echo $precio;?></td>
                  <td><?php echo $total;?></td>
                  <td><?php echo $fecha_registro;?></td>
                  
                <td>
              
             <?php
				if ($eliminacion==1 ){?>
                  <a href="#" class='btn btn-default' title='Eliminar Compra'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_compra;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                      <?php } ?>
                      
                   <?php
				if ($actualizacion==1 ){?>
                  	<a href="#" class='btn btn-default' title='Editar Compra'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_compra;?>" , "<?php echo $id_proveedor;?>", "<?php echo $descripcion;?>","<?php echo $cantidad;?>","<?php echo $precio;?>")' ><i class="glyphicon glyphicon-edit"></i></a>
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
     
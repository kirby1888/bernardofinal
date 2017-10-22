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
           
            
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro ="SELECT * FROM products WHERE date_added BETWEEN '$desde' AND '$hasta' ORDER BY id_producto ASC";
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
		                $id_producto=$row['id_producto'];
					
			           
		
?>
		 <tr>
                <td><?php echo $id_producto;?></td>             
               
               ss
                <td>
              
                  <a href="?modulo=cliente&accion=eliminar&id=<?php echo $id_producto;?>" data-toggle="tooltip" title="Eliminar cliente"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                  <a href="?modulo=mascota&accion=listar&idCliente=<?php echo $id_producto;?>" data-toggle="tooltip" title="Listar mascotas"><span class="glyphicon glyphicon-list"></span></a>
                  
                  
                  	<a href="#" class='btn btn-default' title='Editar mascota'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_producto;?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
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
     
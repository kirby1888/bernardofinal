<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';




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
             <th >No.</th>
                <th >Codigo de Transación</th>
                <th>Fecha</th>
                <th>Codigo</th>
                <th>Medicamento</th>
				<th >Tipo</th>
                <th >Cant.</th>
                <th>Unidad</th>
                  <th>stock</th>
                <th>opciones</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro="SELECT a.tipo_transaccion,a.no,a.id_proveedor, a.codigo_transaccion,a.fecha,a.codigo,a.stock,a.numero,b.codigo_producto,b.nombre_producto,b.unidad FROM transaccion_medicamentos as a INNER JOIN products as b ON a.codigo=b.codigo_producto WHERE a.fecha BETWEEN '$desde' AND '$hasta' ";
		
		
		
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		

                         $num=$row['no'];
			             $cod_tra=$row['codigo_transaccion'];
                        $fecha=$row['fecha'];
                         $codigo=$row['codigo'];
                         $nombre=$row['nombre_producto'];
				         $tipo=$row['tipo_transaccion'];
                        $cant=$row['numero'];
                         $uni=$row['unidad'];
                        $pro=$row['id_proveedor'];
                         $stock=$row['stock'];
        ?>
		 <tr>
                          <td><?php echo $num; ?></td>
                <td><?php echo $cod_tra; ?></td>
                <td><?php echo $fecha;?></td>
                <td><?php echo $codigo;?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $tipo;?></td>  
                  <td><?php echo $cant;?></td>
                  <td><?php echo $uni;?></td>
                          <td><?php echo $stock;?></td>



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
     
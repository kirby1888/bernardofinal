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
            <th>Tipo</th>
            <th>Producto</th>
            <th>Servicio</th>
             <th>Precio</th>
            <th>fecha creacion<th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_proservicios inner join tbl_tiposervicios on tbl_proservicios.id_tipo = tbl_tiposervicios.id_tipo  order by id_servicio ASC";
            
			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_proservicios");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			            $id_servicio=$row['id_servicio'];
			            $nombre_servicio=$row['nombre'];
						$id_compra=$row['id_compra'];
                        $nombre=$row['nom_servicio'];
						$precio=$row['precio'];
				        $fecha_registro=$row['fecha_registro'];
                        $fecha_registro = date('d/m/Y', strtotime($fecha_registro));
			           
          ?>
                      
              <tr>
                <td><?php echo $id_servicio; ?></td>
                <td><?php echo $nombre_servicio; ?></td>
                <td><?php echo $id_compra;?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $fecha_registro;?></td>

                <td>
               
                  	<a href="#" class='btn btn-default' title='Editar servicio'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_servicio;?>" , "<?php echo $nombre_servicio ;?>", "<?php echo $nombre; ?>","<?php echo $precio; ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
                    <a href="#" class='btn btn-default' title='Eliminar servicio'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_servicio;?>" )' ><i class="glyphicon glyphicon-trash"></i></a>         
                     
               
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
     
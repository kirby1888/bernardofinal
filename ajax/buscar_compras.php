
<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
  
	$eliminar=getPer('permiso_eliminacion',$rol,'11');
	$actualizar=getPer('permiso_actualizacion',$rol,'11');

	
	
}else{
	header ("Location: index.php");
}


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
            <th>Codigo</th>
            <th>Nombre </th>
               <th>Cantidad </th>
            <th>Precio</th>
           
            <th>Fecha Registro</th>
            <th>Gestionar</th>
          </tr>
        </thead>
        <tbody>




            <?php






			 $sql = "SELECT * FROM products where tipo=1 ";

			$query = mysqli_query($mysqli, $sql);


			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM products ");
		$row1= mysqli_fetch_array($count_query);

			$numrows = $row1['numrows'];


          if ($numrows>0){

        while ($row=mysqli_fetch_array($query)){



                         $id_compra=$row['id_producto'];
			             $id_proveedor=$row['codigo_producto'];
             $descripcion=$row['nombre_producto'];
                         $precio=$row['precio_producto'];
                         $cantidad=$row['cant'];
				         
			             			             $fecha_registro=$row['date_added'];
                         $fecha_registro=date('d/m/y', strtotime($fecha_registro));
			             
/*"<?php echo $cantidad;?>","<?php echo $precio;?> echo //$total */
          ?>



              <tr>
                <td><?php echo $id_compra ?></td>
                <td><?php echo $id_proveedor ?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $cantidad;?></td>
                <td><?php echo $precio;?></td>

                <td><?php echo $fecha_registro;?></td>



                <td>



                
                  <?php
			if ($eliminar==1){?>
                  <a href="#" class='btn btn-default' title='Eliminar Compra'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_compra;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
            <?php } ?>

<?php
			if ($actualizar==1){?>
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
    


<!---------------------------------------------------------------------------------------------------->

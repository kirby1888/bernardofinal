
<?php  
require '../funcs/conexion.php'; 
  $errors =array(); 

 
?>
 <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

     

     
     <div class="container">
     
     
     
      </div>
      
 
     <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
     <thead>
           <tr class="success">
            <th>Id</th> 
            <th>Codigo</th> 
            <th>Nombre</th>
             <th>Precio</th>
            <th>Fecha_registro</th>
           
         <th>Acciones</th>
          </tr>
        </thead>

        <tbody>

          <?php
			   
       $sql = "SELECT * FROM products  where tipo=2 order by id_producto ASC";//se puso where tipo=2 para que sea servicio para identificarlo

      $query = mysqli_query($mysqli, $sql);
     
      
      $count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM products  ");
    $row1= mysqli_fetch_array($count_query);
      
      $numrows = $row1['numrows'];
      
 
          if ($numrows>0){
      
        while ($row=mysqli_fetch_array($query)){
      
      
      
      
                  $id_producto=$row['id_producto'];
                  $codigo_producto=$row['codigo_producto'];
                  $nombre_producto=$row['nombre_producto'];
                  $precio_producto=$row['precio_producto'];
                  $date_added=$row['date_added'];
                  
             
                  
                 
                
			
			
			     
			     ?>
             
                 
              <tr>
                <td><?php echo $id_producto ?></td>
                <td><?php echo $codigo_producto;?></td>
                <td><?php echo $nombre_producto ?></td>
                 <td><?php echo $precio_producto ;?></td>
                <td><?php echo  $date_added;?></td>
               
              
                <td>
           
                    <a href="#" class='btn btn-default' title='Eliminar Servicio'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_producto?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                  
                    <a href="#" class='btn btn-default' title='Editar Servicio'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_producto?>","<?php echo $nombre_producto?>" ,"<?php echo $precio_producto?>"  )' ><i class="glyphicon glyphicon-edit"></i></a> 
                      
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
      
      </div>


      
    <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
    </div>
    
  




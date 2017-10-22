<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
  
  
  $actualizar=getPer('permiso_actualizacion',$rol,'5');
  
  $eliminar=getPer('permiso_eliminacion',$rol,'5');

}else{
  header ("Location: index.php");
}


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
            <th>Propietario</th>
            <th>Mascota</th>
            <th>Servicio</th>
            <th>Fecha_registro</th>
            <th>Acciones</th>

          </tr>
        </thead>

        <tbody>

          <?php
			   
       $sql = "SELECT * FROM atencion_mascota   order by id_atencion ASC";//se puso where tipo=2 para que sea servicio para identificarlo

      $query = mysqli_query($mysqli, $sql);
     
      
      $count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM atencion_mascota  ");
    $row1= mysqli_fetch_array($count_query);
      
      $numrows = $row1['numrows'];
      
 
          if ($numrows>0){
      
        while ($row=mysqli_fetch_array($query)){
      
      
      
      
                  $id_atencion=$row['id_atencion'];
                  $codigo=$row['codigo'];
                  $propietario=$row['propietario'];
                  $mascota=$row['mascota'];
                  $servicio=$row['servicio'];
                  $date_added=$row['date_added'];
                
             
                  
                 
                
			
			
			     
			     ?>
             
                 
              <tr>
                <td><?php echo $id_atencion;?></td>
                <td><?php echo $codigo;?></td>
                <td><?php echo $propietario;?></td> 
                <td><?php echo $mascota;?></td>
                <td><?php echo $servicio;?></td>
                <td><?php echo  $date_added;?></td>
              
              
                <td>
           
                               <?php
                    if ($actualizar==1){?>

                    <a href="#" class='btn btn-default' title='Editar Atencion'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_producto?>","<?php echo $nombre_producto?>" ,"<?php echo $precio_producto?>"  )' ><i class="glyphicon glyphicon-edit"></i></a> 
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
    
  




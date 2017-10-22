
<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
  
	$eliminar=getPer('permiso_eliminacion',$rol,'1');
	$actualizar=getPer('permiso_actualizacion',$rol,'1');

	
	
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
          <th>ID</th>
            <th>RTN</th>
            <th>Empresa</th>
             <th>Representante</th>
              <th>Telefonos </th>
              <th>Tipo</th>
                 <th>correo</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>

          <?php 
			
			
			

  
					 $sql = "SELECT * FROM tbl_proveedores ";

			$query = mysqli_query($mysqli, $sql);
     
			
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_proveedores ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
 
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			
			
			            $hola=$row['id_proveedor'];
			            $nom_empresa=$row['nom_empresa'];
			            $representante=$row['representante'];
						$num_tel1=$row['num_tel1'];
						$num_tel2=$row['num_tel2'];
						$RTN=$row['RTN'];
			            $tipo= $row['tipo'];
                        $cor_empresa=$row['cor_empresa'];
			     
			     ?>
             
     
              <tr>

              <td><?php echo $hola; ?></td>
                <td><?php echo $RTN?></td>
             
                <td><?php echo $nom_empresa?></td>
                <td><?php echo $representante;?></td>
                <td><?php echo $num_tel1." || ".$num_tel2;?></td>
                 
                  <td><?php echo $tipo?></td>
                  <td><?php echo $cor_empresa;?></td>
                <td>
              

                  
             <?php
			if ($eliminar==1){?>
              <a href="#" class='btn btn-default' title='Eliminar provrrdor'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $hola?>" )' ><i class="glyphicon glyphicon-remove"></i></a>   
                <?php } ?>
                
                  <?php
			if ($actualizar==1){?>
                 <a href="#" class='btn btn-default' title='Editar provrrdor'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $hola?>","<?php echo $RTN?>" , "<?php echo $nom_empresa ?>", "<?php echo $representante ?>", "<?php echo $num_tel1?>","<?php echo $num_tel2 ?>","<?php echo $tipo ?>","<?php echo $cor_empresa ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
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
    
  




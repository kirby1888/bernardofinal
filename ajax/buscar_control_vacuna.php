<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'11 ');	
$eliminacion=getPer('permiso_eliminacion',$rol,'11');
		
?>

       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>ID</th> 
            <th>VACUNA</th>
            <th>MASCOTA</th>
             <th>CANTIDAD CC/ML</th>
			 <th>DESCRIPCION</th> 
             <th>APLICADA</th> 
             <th>PROXIMA</th> 
             <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_vacunas inner join tbl_tipvacunas on tbl_vacunas.id_tipovacuna = tbl_tipvacunas.id_tipovacuna inner join tbl_mascotas on tbl_vacunas.id_mascota = tbl_mascotas.id_mascota order by id_vacuna ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_vacunas  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			            $id_vacuna=$row['id_vacuna'];
			            $id_mascota=$row['id_mascota'];
                        $nom_mascota=$row['nom_mascota'];
                        $id_tipovacuna=$row['id_tipovacuna'];
                        $nombre=$row['nombre'];
						$ccml=$row['ccml'];
			            $descripcion=$row['descripcion_vac'];
						$aplicada=$row['aplicada'];
                        $aplicada= date('d/m/Y', strtotime($aplicada));
				        $proxima=$row['proxima'];
                        $proxima= date('d/m/Y', strtotime($proxima));
                       
			         		           
          ?>
                      
              <tr>
             <td><?php echo $id_vacuna; ?></td>      
                <td><?php echo $nom_mascota;?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $ccml; ?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $aplicada;?></td>
                <td><?php echo $proxima;?></td>

                <td>
                      <?php
				if ($actualizacion==1 ){?>
                  <a href="#" class='btn btn-default' title='Editar control de vacuna'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_vacuna;?>" , "<?php echo $id_mascota ;?>", "<?php echo $id_tipovacuna; ?>","<?php echo $ccml; ?>","<?php echo $descripcion; ?>","<?php echo $proxima; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                      
                   <?php
				if ($eliminacion==1 ){?>
                  	 <a href="#" class='btn btn-default' title='Eliminar control'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_vacuna;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
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
     
<!-- Modal -->

<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['vacunas'])) {
           $errors[] = "Vacuna vacia";
        } else if (empty($_POST['nombres'])){
			$errors[] = "Nombre de la mascota vació";
		} else if (empty($_POST['cc/ml1'])){
			$errors[] = "Cantidad aplicada vacia";
		} else if (empty($_POST['descripcion'])){
			$errors[] = "Descripcion vacia";
		} 
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));
        $vacuna=mysqli_real_escape_string($con,(strip_tags($_POST["vacunas"],ENT_QUOTES)));
        $ccml=mysqli_real_escape_string($con,(strip_tags($_POST["cc/ml1"],ENT_QUOTES)));
        $descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
        $proxima=mysqli_real_escape_string($con,(strip_tags($_POST["proxima"],ENT_QUOTES)));
              $vacuna=strtoupper($vacuna);
              $nombre=strtoupper($nombre);
              $ccml=strtoupper($ccml);
              $descripcion=strtoupper($descripcion);
		
		
		$sql="INSERT INTO tbl_vacunas(id_tipovacuna,id_mascota,ccml,descripcion_vac,proxima) VALUES ('$vacuna','$nombre','$ccml','$descripcion','$proxima')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";
				
				
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
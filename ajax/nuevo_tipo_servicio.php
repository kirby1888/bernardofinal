<!-- Modal -->

<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nombres'])) {
           $errors[] = "nombre vacío";
        } else if (empty($_POST['descripcions'])){
			$errors[] = "Descripcion vacío";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["descripcions"],ENT_QUOTES)));
		
               $nombre=strtoupper($nombre);
               $descripcion=strtoupper($descripcion);
		
		
		$sql="INSERT INTO tbl_tiposervicios (nombre,descripcion) VALUES ('$nombre','$descripcion')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "El servicio ha sido ingresado satisfactoriamente.";
				
				
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
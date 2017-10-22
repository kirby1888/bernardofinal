<!-- Modal -->

<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_tipo'])) {
           $errors[] = "Tipo vacío";
        } else if (empty($_POST['nom_servicio'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['precio'])){
			$errors[] = "Precio vacío";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
        $tipo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_tipo"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nom_servicio"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($con,(strip_tags($_POST["precio"],ENT_QUOTES)));
		
               $nombre=strtoupper($nombre);
               $precio=strtoupper($precio);
		
		
		$sql="INSERT INTO tbl_proservicios (id_tipo,nom_servicio,precio) VALUES ('$tipo','$nombre','$precio')";
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
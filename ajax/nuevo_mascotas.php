<!-- Modal -->

<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id_cliente'])) {
           $errors[] = "Tipo vacío";
        } else if (empty($_POST['nom_mascota'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['especie'])){
			$errors[] = "Especie vacío";
		} else if (empty($_POST['raza'])){
			$errors[] = "Raza vacío";
		} else if (empty($_POST['sexo'])){
			$errors[] = "Sexo vacío";
		} else if (empty($_POST['nacimiento'])){
			$errors[] = "Nacimiento vacío";
		} else if (empty($_POST['descripcion'])){
			$errors[] = "Descripcion vacío";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
        $cliente=$_POST["id_cliente"];
		$mascota=$_POST["nom_mascota"];
		$especie=$_POST["especie"];
		$raza=$_POST["raza"];
		$sexo=$_POST["sexo"];
		$nacimiento=$_POST["nacimiento"];
		$descripcion=$_POST["descripcion"];
		
		
       $mascota=strtoupper($mascota);
        $especie=strtoupper($especie);
        $raza=strtoupper($raza);
        $sexo=strtoupper($sexo);
        $descripcion=strtoupper($descripcion);
		
		
		$sql="INSERT INTO tbl_mascotas (id_cliente,nom_mascota,especie,raza,sexo,nacimiento,descripcion) VALUES ('$cliente','$mascota','$especie','$raza','$sexo','$nacimiento','$descripcion')";
		$query_new_insert = mysqli_query($con,$sql);
		
			if ($query_new_insert){
				$messages[] = "Se ha registrado la mascota correctamente.";
				
				
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
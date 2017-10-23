<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>

<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id_mascota'])) {
           $errors[] = "id_mascota vacío";
        }else if (empty($_POST['id_cliente'])) {
           $errors[] = "id_cliente vacío";         
        }else if (empty($_POST['nom_mascota'])) {
           $errors[] = "nom_mascota vacío";
        } else if (empty($_POST['especie'])) {
           $errors[] = "especie vacío";
        } else if (empty($_POST['raza'])) {
           $errors[] = "raza vacío";
        } else if (empty($_POST['sexo'])) {
           $errors[] = "sexo vacío";
        } else if (empty($_POST['nazi'])) {
           $errors[] = "nazi vacío";
        }else if (empty($_POST['descripcion'])) {
           $errors[] = "descripcion vacío";
        } 
   
         else if (
			!empty($_POST['id_mascota'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_mascota=$_POST['id_mascota'];
		$id_cliente=$_POST['id_cliente'];
		$nom_mascota=$_POST["nom_mascota"];
		$especie = $_POST["especie"];
		$raza=$_POST["raza"];
		$sexo=$_POST["sexo"];
        $nacimiento=$_POST['nazi'];
		$descripcion=$_POST["descripcion"];
		
		
 		  $id_mascota= strtoupper($id_mascota);
          $id_cliente= strtoupper($id_cliente);
          $nom_mascota= strtoupper($nom_mascota);
          $especie= strtoupper($especie);
          $raza= strtoupper($raza);
          $sexo= strtoupper($sexo);
          $nacimiento= strtoupper($nacimiento);
          $descripcion= strtoupper($descripcion);
		
         
            
		$sql="UPDATE tbl_mascotas SET id_mascota='".$id_mascota."', nom_mascota='".$nom_mascota."', especie='".$especie."', raza='".$raza."', sexo='".$sexo."', nacimiento='".$nacimiento."', descripcion='".$descripcion."'  WHERE id_mascota='".$id_mascota."'";
		$query_update = mysqli_query($mysqli,$sql);
		
                      
			if ($query_update){
				 
			 
				$messages[] = "La mascota ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($mysqli);
			}
		} else {
			$errors []= "Error desconocido.";
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
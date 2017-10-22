<?php

session_start();


if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
	$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_tipo2'])) {
           $errors[] = "Tipo vacio";
        }else if (empty($_POST['nom_servicio2'])) {
           $errors[] = "Nombre Vacio";
        } else if (empty($_POST['precio2'])) {
           $errors[] = "Precio Vacio";
        } 
         else if (
			!empty($_POST['mod_tipo2']) &&             
			!empty($_POST['nom_servicio2'])&&
			!empty($_POST['precio2'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_servicio=intval($_POST['mod_id']);
        $id_tipo=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mod_tipo2"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nom_servicio2"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($mysqli,(strip_tags($_POST["precio2"],ENT_QUOTES)));
		
			    $nombre= strtoupper($nombre);
			    $precio= strtoupper($precio);
				

		 
			  $objeto="tbl_tiposervicios";
                     $us="probando";
                    $accion="UPDATE";
         
            
		$sql="UPDATE tbl_proservicios SET id_tipo ='".$id_tipo."',nom_servicio='".$nombre."', precio='".$precio."' WHERE id_servicio='".$id_servicio."'";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
			 
				$messages[] = "El parametro ha sido actualizado satisfactoriamente.";
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
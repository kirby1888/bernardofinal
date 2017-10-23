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
	if (empty($_POST['id_vacuna'])) {
           $errors[] = "id_vacuna vacío";
        }else if (empty($_POST['nombre'])) {
           $errors[] = "Nombre de la mascota vacío";         
        }else if (empty($_POST['vacuna'])) {
           $errors[] = "Nombre de la vacuna vacío";
        } else if (empty($_POST['ccml'])) {
           $errors[] = "Cantidad de CC/ML aplicadas vacío";
        } else if (empty($_POST['descripcions'])) {
           $errors[] = "Descripcion de la vacuna aplicada vacío";      
        } 
   
         else if (
			!empty($_POST['id_vacuna'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_vacuna=$_POST['id_vacuna'];
		$nombre=$_POST['nombre'];
		$vacuna=$_POST["vacuna"];
		$ccml= $_POST["ccml"];
		$descripcion=$_POST["descripcions"];
		$proxima=$_POST["proxima"];
			  $objeto="tbl_vacunas";
                     $us="probando";
                    $accion="UPDATE";
         
            
		$sql="UPDATE tbl_vacunas SET id_mascota='".$nombre."',id_tipovacuna='".$vacuna."',ccml='".$ccml."', descripcion_vac='".$descripcion."',Proxima='".$proxima."' WHERE id_vacuna='".$id_vacuna."'";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
			 
				$messages[] = "El registro ha sido actualizado satisfactoriamente.";
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
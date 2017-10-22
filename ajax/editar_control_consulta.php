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
	if (empty($_POST['mod_id'])) {
           $errors[] = "Id de la consulta vacia";
         } else if (empty($_POST['nombres'])){
			$errors[] = "Nombre de la mascota vació";
        } else if (empty($_POST['motivos'])){
			$errors[] = "Motivo de la consulta vació";
		} else if (empty($_POST['sintomas1'])){
			$errors[] = "Sintomas vació";
		} else if (empty($_POST['tratamientos'])){
			$errors[] = "Tratamiento vació";
		} 
   
         else if (
			!empty($_POST['mod_id'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$mod_id=$_POST['mod_id'];
		$nombres=$_POST['nombres'];
        $motivos=$_POST['motivos'];
		$sintomas1=$_POST["sintomas1"];
		$tratamientos= $_POST["tratamientos"];
		
			  $objeto="tbl_consultas";
                     $us="probando";
                    $accion="UPDATE";
         
            
		$sql="UPDATE tbl_consulta SET id_mascota='".$nombres."',motivo='".$motivos."',sintomas='".$sintomas1."', tratamientos='".$tratamientos."' WHERE id_consulta='".$mod_id."'";
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
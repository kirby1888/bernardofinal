<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>

<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['identidad'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['nom'])) {
           $errors[] = "Nombre vacío";
         
        }else if (empty($_POST['apellido'])) {
           $errors[] = "apellido vacío";
        } else if (empty($_POST['celular'])) {
           $errors[] = "celular vacío";
        } else if (empty($_POST['correo_electronico'])) {
           $errors[] = "correo vacío";
        } else if (empty($_POST['direccion'])) {
           $errors[] = "direccion vacío";
        } else if (empty($_POST['membresia'])) {
           $errors[] = "membresia vacío";
        }
   
         else if (
			!empty($_POST['nom']) &&
			!empty($_POST['apellido'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST['identidad'];
		$nombre=$_POST["nom"];
		$apellido=$_POST["apellido"];
		$celular = $_POST["celular"];
		$telefono=$_POST["telefono"];
		$correo=$_POST["correo_electronico"];
		$direccion=$_POST["direccion"];
		$mem=$_POST["membresia"];
		

			 
			 
			 
			 
			 
			 
			    $nombre= strtoupper($nombre);
				$apellido= strtoupper($apellido);
                $direccion= strtoupper($direccion);

		if (preg_match('/\w+@\w+\.+[a-z]/', $correo)){
         
            
		$sql="UPDATE tbl_clientes SET identidad='".$id."',nom_cliente='".$nombre."',direccion='".$direccion."', ape_cliente='".$apellido."', celular='".$celular."', cor_cliente='".$correo."', telefono='".$telefono."', membresia= '".$mem."' WHERE identidad='".$id."'";
		$query_update = mysqli_query($mysqli,$sql);
		
                      
			if ($query_update){
				 
			 
				$messages[] = "El registrp ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($mysqli);
            }
			}else{
              $errors []= "El formato del correo es invalido,  ==>> correo@ejemplo.com."; 
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
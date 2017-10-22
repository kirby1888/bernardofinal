<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>

<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['candi'])) {
           $errors[] = "id_producto";
       } else if (empty($_POST['nombre_producto'])) {
           $errors[] = "Nombre vacío";                             
        }else if (empty($_POST['precio_producto'])) {
           $errors[] = "precio vacío";
      
      } 
   
         else if (
			!empty($_POST['candi']) &&
			!empty($_POST['nombre_producto'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
	                   $id_producto=$_POST['candi'];
	                    $nombre_producto=$_POST['nombre_producto'];
						$precio_producto=$_POST['precio_producto'];
								          

			 
			        $nombre_producto = strtoupper($nombre_producto);
				

		
         
            
		$sql="UPDATE products SET id_producto='".$id_producto."',nombre_producto='".$nombre_producto."', precio_producto='".$precio_producto."' WHERE id_producto='".$id_producto."'";
		$query_update = mysqli_query($mysqli,$sql);
		
                      
			if ($query_update){
				 
			 
				$messages[] = "El servicio ha sido actualizado satisfactoriamente.";
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
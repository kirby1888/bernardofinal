<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>

<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['candi'])) {
           $errors[] = "id_producto";
       } else if (empty($_POST['propietario'])) {
           $errors[] = "propietario vacío";                             
        }else if (empty($_POST['servicio'])) {
           $errors[] = "servicio vacío";
      } else if(empty($_POST['parasitos'])) {
      	  $errors[] = "parasito vacio";
      } else if(empty($_POST['pertenencia'])) {
      	  $errors[] = "pertenencia vacio";
      }
   
         else if (
			!empty($_POST['candi']) &&
			!empty($_POST['propietario'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
	                   $id_atencion=$_POST['candi'];
	                    $propietario=$_POST['propietario'];
						$mascota=$_POST['mascota'];
						$servicio = isset($_POST['servicio']) ? $_POST['servicio'] : null;

                        	$arrayservicio = null;
	
	$num_array = count($servicio);
	$contador = 0;
	
	if($num_array>0){
		foreach ($servicio as $key => $value) {
			if ($contador != $num_array-1)
			$arrayservicio .= $value.' ';
			else
			$arrayservicio .= $value;
			$contador++;
		}
	}

	$pertenencia = isset($_POST['pertenencia']) ? $_POST['pertenencia'] : null;

                        	$arraypertenencia = null;
	
	$num_array = count($pertenencia);
	$contador = 0;
	
	if($num_array>0){
		foreach ($pertenencia as $key => $value) {
			if ($contador != $num_array-1)
			$arraypertenencia .= $value.' ';
			else
			$arraypertenencia .= $value;
			$contador++;
                // check if user or email address already exists
				}
	}

	$parasitos = isset($_POST['parasitos']) ? $_POST['parasitos'] : null;

                        	$arrayparasitos = null;
	
	$num_array = count($parasitos);
	$contador = 0;
	
	if($num_array>0){
		foreach ($parasitos as $key => $value) {
			if ($contador != $num_array-1)
			$arrayparasitos .= $value.' ';
			else
			$arrayparasitos .= $value;
			$contador++;
                // check if user or email address already exists
				}
	}	
								          

			 
			        $propietario = strtoupper($propietario);
			         $mascota = strtoupper($mascota);
			          $arrayservicio = strtoupper($arrayservicio);
			           $arraypertenencia = strtoupper($arraypertenencia);
			            $arrayparasitos = strtoupper($arrayparasitos);
				

		
         
            
		$sql="UPDATE atencion_mascota SET id_atencion='".$id_atencion."',propietario='".$propietario."', mascota='".$mascota."',servicio='".$arrayservicio."', pertenencia='".$arraypertenencia."', parasitos='".$arrayparasitos."' WHERE id_atencion='".$id_atencion."'";
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
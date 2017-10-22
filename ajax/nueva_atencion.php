<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>




<?php


				// escaping, additionally removing everything that could be (html/javascript-) code
                       
                        $codigo=$_POST['codigo'];
                        $propietario=$_POST['propietario'];
                        $mascota=$_POST['mascota'];
                        $edad=$_POST['edad'];
                        $especificaciones=$_POST['especificaciones'];
					
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
					// write new user's data into database
			 
					 $propietario= strtoupper($propietario);
					 $mascota= strtoupper($mascota);
					 $arrayservicio= strtoupper($arrayservicio);
					 $especificaciones= strtoupper($especificaciones);
					 $arrayparasitos= strtoupper($arrayparasitos);
					 $arraypertenencia= strtoupper($arraypertenencia);
					
                    $consulta=("INSERT INTO atencion_mascota(codigo,propietario,mascota,edad,servicio,especificaciones,parasitos,pertenencia) VALUES('$codigo','$propietario','$mascota',$edad, '$arrayservicio','$especificaciones', '$arrayparasitos','$arraypertenencia')"); //para que cada nuevo ingreso identifique que sea servicio  se puso tipo en el insert into y colocamos 2 en los values
					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
            
         
                    // if user has been added successfully
                    if ($resultado) {
						
                        $messages[] = "El registro ha sido creado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
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
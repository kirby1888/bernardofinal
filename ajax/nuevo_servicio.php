<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>




<?php





		   
			
				// escaping, additionally removing everything that could be (html/javascript-) code
                       
                        $codigo_producto=$_POST['codigo_producto'];
						$nombre_producto=$_POST['nombre_producto'];
						$precio_producto=$_POST['precio_producto'];
				        $cant=9999999999999999999999999999999999999999999;//para que cantidad de servicios sea infinita
			     

            
                // check if user or email address already exists
			
			
			
					// write new user's data into database
			        $nombre_producto= strtoupper($nombre_producto);//para que las letras se hagan mayusculas
					
					
                    $consulta=("INSERT INTO products(codigo_producto,nombre_producto,precio_producto,cant,tipo) VALUES('$codigo_producto', '$nombre_producto', '$precio_producto','$cant',2)"); //para que cada nuevo ingreso identifique que sea servicio  se puso tipo en el insert into y colocamos 2 en los values
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
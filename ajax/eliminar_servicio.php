<?php

		
		if (empty($_POST['can'])){
			$errors[] = "ID vacío";
		 
        }  elseif (
			 !empty($_POST['can'])
			
        ) {
             require '../funcs/conexion.php';
require '../funcs/funcs.php';
				$id_producto=$_POST['can'];
			
				
                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
				
					
               
					// write new user's data into database
                    $sql = "DELETE  FROM products WHERE id_producto='".$id_producto."'";
                    $query = mysqli_query($mysqli,$sql);

                    // if user has been added successfully
		if ($query) {
						
                        $messages[] = "El servicio ha sido eliminado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                
            
        } else {
            $errors[] = "Un error desconocido ocurrió.";
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
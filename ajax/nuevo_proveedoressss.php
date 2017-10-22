<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';

?>


<?php
		   
				// escaping, additionally removing everything that could be (html/javascript-) code
                       
                        $nom_empresa=$_POST['nom_empresa'];
						$num_tel1=$_POST['num_tel1'];
						$num_tel2=$_POST['num_tel2'];
				        $direccion=$_POST['direccion'];
			            $RTN=$_POST['RTN'];
			            $tipo= $_POST['tipo'];
			           $representante=$_POST['representante'];
                        $cor_empresa=$_POST['cor_empresa'];
			     

            
                // check if user or email address already exists
			        $nom_empresa= strtoupper($nom_empresa);
					$representante= strtoupper($representante);
			        $direccion= strtoupper($direccion);
					$tipo= strtoupper($tipo);

			
			
					// write new user's data into database
			       
                    if (preg_match('/\w+@\w+\.+[a-z]/', $cor_empresa)){
					
                    $consulta=("INSERT INTO tbl_proveedores(nom_empresa,num_tel1,num_tel2,direccion,RTN,tipo,representante,cor_empresa) VALUES('$nom_empresa', '$num_tel1', '$num_tel2','$direccion','$RTN','$tipo','$representante','$cor_empresa')");
					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
            
         
                    // if user has been added successfully
                    if ($resultado) {					
                        $messages[] = "La cuenta ha sido creada con éxito.";
                    }
                    } else {
                        $errors[] = "El formato del correo es invalido,  ==>> correo@ejemplo.com.";
                       
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
<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';

?>
<?php		   
			
				// escaping, additionally removing everything that could be (html/javascript-) code
              
				$id_proveedor=$_POST["id_proveedor"];//codigo
				$descripcion=$_POST["descripcion"];//nombre_producto				
                $cantidad = $_POST["cantidad"];//cant				
				$precio=$_POST["precio"];//precio_producto
    			
    			
    ;
               
               
            

            
                // check if user or email address already exists
			
			
			
					// write new user's data into database
			
					
                    $consulta=("INSERT INTO products (codigo_producto, nombre_producto,precio_producto,cant,tipo) VALUES('$id_proveedor', '$descripcion', '$precio','$cantidad','1')");
					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
            
         
                    // if user has been added successfully
                    if ($resultado) {
						
                        $messages[] = "El producto ha sido creado con éxito.";
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
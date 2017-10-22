<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>

<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['hola'])) {
           $errors[] = "id_proveedor";
       } else if (empty($_POST['nom_empresa'])) {
           $errors[] = "Empresa vacío";
        } else if (empty($_POST['representante'])) {
           $errors[] = "representante vacío";
                                      
        }else if (empty($_POST['num_tel1'])) {
           $errors[] = "telefono vacío";
        } else if (empty($_POST['num_tel2'])) {
           $errors[] = "celular vacío";
          } else if (empty($_POST['RTN'])) {
           $errors[] = "RTN vacío";
        } else if (empty($_POST['tipo'])) {
           $errors[] = "tipo vacío";
        } else if (empty($_POST['cor_empresa'])) {
           $errors[] = "correo vacío";
           
        } 
   
         else if (
			!empty($_POST['hola']) &&
			!empty($_POST['nom_empresa'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
	                   $id_proveedor=$_POST['hola'];
	                    $nom_empresa=$_POST['nom_empresa'];
						$num_tel1=$_POST['num_tel1'];
						$num_tel2=$_POST['num_tel2'];
						$RTN=$_POST['RTN'];
			            $tipo= $_POST['tipo'];
			            $representante=$_POST['representante'];
                        $cor_empresa=$_POST['cor_empresa'];

			 
			        $nom_empresa= strtoupper($nom_empresa);
				$representante= strtoupper($representante);

		 if (preg_match('/\w+@\w+\.+[a-z]/', $cor_empresa)){
         
            
		$sql="UPDATE tbl_proveedores SET id_proveedor='".$id_proveedor."',nom_empresa='".$nom_empresa."', num_tel1='".$num_tel1."',  num_tel2='".$num_tel2."', RTN='".$RTN."',tipo= '".$tipo."',representante='".$representante."', cor_empresa='".$cor_empresa."' WHERE id_proveedor='".$id_proveedor."'";
		$query_update = mysqli_query($mysqli,$sql);
		
                      
			if ($query_update){
				 
			 
				$messages[] = "El proveedor ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($mysqli);
			}
		} else {
             $errors []= "El formato del correo es invalido,  ==>> correo@ejemplo.com."; 
             }
         }else{
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
<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	$errors =array();
	if(empty($_GET['user_id'])){
		header('Location: index.php');
	}
	

	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	

$consulta="select pregunta from tbl_preguntas";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
	
	
	$objeto="recupera";
$accion="INGRESO";
$descripcion="Esta en la pantalla de verificacion de pregunta y respuesta";
$bita=grabarBitacora($user_id,$objeto,$accion,$descripcion);



if  (!empty($_POST)){   
    $res = $mysqli->real_escape_string($_POST['email']);
    $pre = $mysqli->real_escape_string($_POST['mod_rol']);
        if (preguCorrectas($user_id,$pre,$res)){
           $token=  generateToken();
			
         echo "esta bien";
				header('Location:cambia_contra.php?user_id='.$user_id.'&token='.$token);
			

					 
					
                        
        
    }else{
        $errors[]="respuesta o pregunta incorrectas";
    }

}











?>

<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Responde una Pregunta de seguridad </div>
				<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.php">Iniciar Sesi&oacute;n</a></div>
			</div>     
			
			<div style="padding-top:30px" class="panel-body" >
			<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
				<div class="form-group">
				<label for="mod_rol" class="col-sm-3 control-label">Rol</label>
				<div class="col-sm-8">
				  <select title="Preguntas" class='form-control' name='mod_rol' id='mod_rol' onchange="load(1);">
							<option value="">Seleccione una pregunta</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_preguntas order by id_pregunta");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_pregunta'];?>"><?php echo $rw['pregunta'];?></option>			
								<?php
							}

							?>
						</select>
				</div>
			  </div>
					
					<div class="form-group">
						<label for="con_password" class="col-md-3 control-label">Respuesta</label>
						<div class="col-md-9">
							<input title="Respuesta de la Pregunta" id="email" type="text" class="form-control" name="email" placeholder="Respuesta" title="Debes responder la pregunta" onPaste="return false;" maxlength="50" required>
						</div>
					</div>
					<center>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<button title="Modificar contraseña" id="btn-login" type="submit" class="btn btn-success">Modificar</a>
						</div>
					</div>  
					</center> 
				</form>
				<?php echo resultBlock($errors); ?>
			</div>                     
		</div>  
		</div>
		</div>
	</body>
</html>	
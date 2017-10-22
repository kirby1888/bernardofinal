<?php 


              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo,6) as codigo FROM atencion_mascota
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }


              $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo = "A$buat_id";
              ?>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nueva Atencion</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
		       <div class="form-group">
			   <label for="identidad" class="col-sm-3 control-label">Codigo </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="tel" class="form-control" id="codigo" name="codigo" placeholder="Codigo" onPaste="return false;"  maxlength="100" value=<?php echo $codigo; ?> autocomplete="off" readonly>
				</div> 
			  </div>
			  </div>
			    <div>	<br><br></div>


			         <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Nombre Mascota</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-knight"></i></span>
				  <input  type="tel" class="form-control" id="mascota" name="mascota" placeholder="Mascota"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;" onkeypress="return soloLetras(event)"  maxlength="15" autocomplete="off" onkeyup="return unespacio101()" required>
				</div> 
			  </div>
			  </div>
			  <script>
	function unespacio101(){
		orig=document.guardar_usuario.mascota.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.mascota.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(mascota.value.match(/\s\s/)) mascota.value = mascota.value.replace('  ', ' ');
}

</script>
			  			  <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
       <div><br><br></div>

        
</div>
	
			 <div class="agileinfo-row w3ls-row2"> 
			 
			    <div class="form-group">
			   <label for="nombre" class="col-sm-3 control-label">Nombre Propietario</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nombre" type="text" class="form-control" id="propietario" name="propietario" placeholder="Nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="15" onPaste="return false;" autocomplete="off" onkeyup="return unespacio100()" required>
				</div>
			  </div>
			  </div>
<script>
	function unespacio100(){
		orig=document.guardar_usuario.propietario.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.propietario.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(propietario.value.match(/\s\s/)) propietario.value = propietario.value.replace('  ', ' ');
}

</script>

			  <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
			 
			  <div>	<br><br></div>

			  <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Edad</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"><i class="glyphicon glyphicon-plus-sign"></i></span>
				    <input title="E-mail" type="text" class="form-control" id="edad" name="edad" placeholder="Edad" maxlength="20" onPaste="return false;" required autocomplete="off" onkeyup="return unespacio102()">
					</div>
				  </div>
				</div>
				</div>
		  <div>	<br><br></div>
		    <div>	<br><br></div>
		      <div>	<br><br></div>
	  <script>
	function unespacio102(){
		orig=document.guardar_usuario.edad.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.edad.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(edad.value.match(/\s\s/)) edad.value = edad.value.replace('  ', ' ');
}

</script>
		      <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Especificacion Especial</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" id="especificaciones" name="especificaciones" placeholder="Especificaciones"  title="Usuario"   onPaste="return false;" onkeypress="return soloLetras(event)"  style="text-transform: uppercase;" maxlength="200" autocomplete="off" onkeyup="return unespacio103()"   required=""></textarea>
				</div> 
			  </div>
			  </div>
			  <script>
	function unespacio103(){
		orig=document.guardar_usuario.especificaciones.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.especificaciones.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(especificaciones.value.match(/\s\s/)) especificaciones.value = especificaciones.value.replace('  ', ' ');
}

</script>

			    <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
			  <div>	<br><br></div>
			  <div>	<br><br></div>


<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">SERVICIOS:</label>
					 <div>	<br><br></div>
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Corte Tipico de la Raza">Corte Tipico de la Raza 
						</label>
						 <div>	<br><br></div>
						 <label for="intereses" class="col-sm-4 control-label">TIPO DE CORTE:</label>
					 <div>	<br><br></div>

						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Bajo"> Bajo
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Medio"> Medio
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Alto"> Alto
						</label>
						<div>	<br><br></div>

						<label for="intereses" class="col-sm-2 control-label">OTROS:</label>
					 <div>	<br><br></div>

						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Pintado de Uñas"> Pintado de uñas
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Locion"> Locion
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Corte de uñas"> Corte de Uñas
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Limpieza de Glandulas Anales">Limpieza de Glandulas Anales
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="servicio[]" value="Limpieza de Oidos"> Limpieza de Oidos
						</label>
						 <div>	<br><br></div>
						<label for="intereses" class="col-sm-4 control-label">TIENE GARRAPATAS:</label>
					 <div>	<br><br></div>
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="parasitos[]" value="Escasas"> Escasas
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="parasitos[]" value="Moderadas"> Moderadas
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="parasitos[]" value="Abundantes"> Abundantes
						</label>
						
						 <div>	<br><br></div>
						<label for="intereses" class="col-sm-4 control-label">PERTENENCIAS DE LA MASCOTA:</label>
					 <div>	<br><br></div>
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="pertenencia[]" value="Trae Collar"> Trae Collar
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="pertenencia[]" value="Pechera"> Pechera
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="pertenencia[]" value="Cadena"> Cadena
						</label>
							<label class="checkbox-inline">
							<input type="checkbox" id="servicio[]" name="pertenencia[]" value="Correa"> Correa
						</label>


					</div>
				</div>
  <div>	<br><br></div>



			 </div>
			 </div>
		 
		 
		 
		   <center>
		  <div>	<br><br></div>
		    <div>	<br><br></div>
		      <div>	<br><br></div>  <div>	<br><br></div>
		  <div><br><br> </div>
		  <div><br><br> </div>
		  <div><br><br> </div>
		  <div><br><br> </div>
		   <div class="modal-footer">
			<button title="Cerrar ventana" type="submit"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" onClick="location.reload();" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Servicio</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		   <input type="hidden" id="candi" name="candi">
			  <div class="form-group">
			   <label for="Empresa" class="col-sm-3 control-label">Propietario:</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nom" type="text" class="form-control" id="propietario" name="propietario" placeholder="Nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="255" onPaste="return false;" autocomplete="off" required>

				</div>
			  </div>
			  </div>
			  </div>
			  
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
 <div class="agileinfo-row w3ls-row2"> 

			  <div class="form-group">
			   <label for="Empresa" class="col-sm-3 control-label">Mascota:</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nom" type="text" class="form-control" id="mascota" name="mascota" placeholder="Nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="255" onPaste="return false;" autocomplete="off" required>

				</div>
			  </div>
			  </div>
			  </div>
			  <div><br><br> </div>
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
				<div><br><br> </div>
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
			<button title="Cerrar ventana" onClick="location.reload();" type="submit" onClick="location.reload();"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

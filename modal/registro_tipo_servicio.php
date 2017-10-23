
	<!-- Modal -->
	<div class="modal fade" id="myModalservicios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Servicio</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombres" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombres" name="nombres" placeholder="nombres" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" required>
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

			  <div class="form-group">
				<label for="Descripcions" class="col-sm-3 control-label">Descripcion:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="descripcions" name="descripcions" placeholder="descripcions" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="150" required>
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
		  </div>
              
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>

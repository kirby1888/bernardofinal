
		<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Servicio</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="nombres" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input title="Nombre del servicio" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" required> 
				  <input  type="hidden" id="mod_id" name="mod_id">
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
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" style="text-transform: uppercase;" maxlength="150" onkeypress="return soloLetras(event)" required title="descripcion del servicio">
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
			<button title="Cerrar Ventana" type="button" class="btn btn-default" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button title="Actualizar datos" type="submit" class="btn btn-primary"  id="actualizar_datos">Actualizar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
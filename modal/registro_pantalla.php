
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nueva Pantalla</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="pantalla" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="60"  onPaste="return false;" onkeyup="return unespacio55()"  required>
				</div>
			  </div>
			  <script>
    function unespacio55(){
		orig=document.guardar_parametro.nombre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.nombre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre.value.match(/\s\s/)) nombre.value = nombre.value.replace('  ', ' ');
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
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion:</label>
				<div class="col-sm-8"> 
				  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="DESCRIPCION" style="text-transform: uppercase;"  maxlength="200" onkeyup="return unespacio90()" onPaste="return false;" required>
				</div>
			  </div>                
		  </div>
              <script>
    function unespacio90(){
		orig=document.guardar_parametro.descripcion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.descripcion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(descripcion.value.match(/\s\s/)) descripcion.value = descripcion.value.replace('  ', ' ');
}
    
    </script>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>

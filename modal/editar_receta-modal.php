
	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Receta</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Mascota</label>
				<div class="col-sm-8">
				  <input title="Nombre del Parametro" type="text" class="form-control" id="parametros" name="parametros" placeholder="parametro" style="text-transform: uppercase;" onkeyup="return unespacioparare()" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" required readonly> 
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
</script>
 <script type="text/javascript">
	function unespacioparare(){
		orig=document.editar_usuario.parametros.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.parametros.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(parametros.value.match(/\s\s/)) parametros.value = parametros.value.replace('  ', ' ');
}
</script>

			  <div class="form-group">
				<label for="valor" class="col-sm-3 control-label">Rx :</label>
				<div class="col-sm-8">
                    <textarea type="text" class="form-control" id="valors" name="valors" placeholder="valor" rows=15 cols="10" maxlength="100" style="text-transform: uppercase;" onkeyup="return unespaciorx()" required title="Valor del Parametro"></textarea>
				</div>
			  </div>
 <script type="text/javascript">
	function unespaciorx(){
		orig=document.editar_usuario.valors.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.valors.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(valors.value.match(/\s\s/)) valors.value = valors.value.replace('  ', ' ');
}
</script>
			  
			  
	
						 	 
			
		  </div>
		  <div class="modal-footer">
			<button title="Cerrar Ventana" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Cerrar Ventana" type="submit" class="btn btn-primary"  id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
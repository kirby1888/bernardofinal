<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Servicio</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		   <input type="hidden" id="candi" name="candi">
			  <div class="form-group">
			   <label for="Empresa" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nom" type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre" onkeyup="return unespacio54()" onkeypress="return soloLetras(event)" style="text-transform: uppercase;" maxlength="20" onPaste="return false;" autocomplete="off" required>

				</div>
			  </div>
			  </div>
			  
		  <div><br><br> </div>

<script>
    function unespacio54(){
		orig=document.editar_usuario.nombre_producto.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nombre_producto.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre_producto.value.match(/\s\s/)) nombre_producto.value = nombre_producto.value.replace('  ', ' ');
}
    
    </script>
    <script >
    
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
			   <label for="Empresa" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				  <input title="nom" type="text" class="form-control" id="precio_producto" name="precio_producto" placeholder="Precio"  maxlength="20" onPaste="return false;" autocomplete="off" onkeyup="return noespacios()" onkeypress="return soloNumeros(event)" required>
				</div>
			  </div>
			  </div>

 <script type="text/javascript">                
      function noespacios(){
		orig=document.editar_usuario.precio_producto.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.precio_producto.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script> 
     <script>
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "1234567890";
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
              
			 </div>
		 
		 
		 
		   <center>
		
		  <div><br><br> </div>
		  <div><br><br> </div>
		  <div><br><br> </div>
		   <div class="modal-footer">
			<button title="Cerrar ventana" type="submit" onClick="location.reload();"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar Datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

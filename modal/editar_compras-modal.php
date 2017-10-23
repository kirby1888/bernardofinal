<link href="veterinaria/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-md" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" onClick="location.reload();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo Producto</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
		       <div class="form-group">
			   <label for="id_proveedor" class="col-sm-3 control-label">Codigo </label>
				<div class="col-sm-7">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Id-proveedor" title="Codigo"onPaste="return false;" readonly  maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
			  
			  
			  <input type="hidden" name="id_compra" id="id_compra">
		  
		  
			 <div class="form-group">
			   <label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-7">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-text-height"></i></span>
				  <input title="descripcion" type="text" class="form-control" id="des" name="des" placeholder="Descripcion" maxlength="200" style="text-transform: uppercase;" onkeyup="return unespacio11()" onkeypress="return soloLetras(event)" autocomplete="off" required>
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
	<script>
    function unespacio11(){
		orig=document.editar_usuario.des.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.des.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(des.value.match(/\s\s/)) des.value = des.value.replace('  ', ' ');
}
    </script>

			  
			  
			  

			  <div class="form-group">
			   <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>
				<div class="col-sm-7">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="number" style="text-transform: uppercase;" class="form-control" id="cantidad" name="cantidad" onkeyup="return noespacios()" onkeypress="return solonumeros(event)" placeholder="Cantidad" title="Cantidad" maxlength="20" autocomplete="off">
				</div> 
			  </div>
			  </div>
			  		<script>
       function noespacios(){
		              orig=document.editar_usuario.cantidad.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.editar_usuario.cantidad.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	                   }
       
       function solonumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 1234567890";
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
			   <label for="precio" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-7">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="number" class="form-control" id="precio" name="precio" placeholder="Precio"   title="Precio" style="text-transform: uppercase;" maxlength="20" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
			 

			 </div>
			 
			 
			 
			 
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			             

				

			   
            
			</div>
              
			 </div>
		 
		 
		 
		   <center>
		   <div class="modal-footer">
			<button title="Cerrar ventana" type="submit" onClick="location.reload();"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

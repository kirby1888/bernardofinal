
<?php 


              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_producto,6) as codigo FROM products
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
              $codigo = "B$buat_id";
              ?>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Servicio</h4>
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
				  <input  type="tel" class="form-control" id="codigo_producto" name="codigo_producto" placeholder="Codigo" value=<?php echo $codigo; ?>  maxlength="100" autocomplete="off" readonly>
				</div> 
			  </div>
			  </div>
	<div><br><br></div>

			  <div class="form-group">
			   <label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nombre" type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="255" onPaste="return false;" autocomplete="off" onkeyup="return unespacio()" onkeypress="fnc(event,this)" required>
				</div>
			  </div>
			  </div>
			  <div>	<br><br></div>


 
<script>
    function unespacio(){
		orig=document.guardar_usuario.nombre_producto.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.nombre_producto.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre_producto.value.match(/\s\s/)) nombre_producto.value = nombre_producto.value.replace('  ', ' ');
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
			   <label for="celular" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				  <input  type="tel" class="form-control" id="precio_producto" name="precio_producto" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="100" autocomplete="off"  placeholder="Precio" onkeyup="return noespacios()" onkeypress="return soloNumeros(event)" required>

				</div> 
			  </div>
			  </div>

 <script type="text/javascript">  

      function noespacios(){
		orig=document.guardar_usuario.precio_producto.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_usuario.precio_producto.value=nuev;
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
			<button title="Cerrar ventana" type="submit"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	


  <?php  
require 'funcs/conexion.php';
                    

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
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		   </div>
		  <div class="modal-body">
		  
		  
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
<div id="wrapper">
					
<div class="agileinfo-row">
	
		       <div class="form-group">
			   <label for="id_proveedor" class="col-sm-3 control-label">Codigo </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="" class="form-control" id="id_proveedor" name="id_proveedor" readonly placeholder="Id-proveedor" title="Id del proveedor"onPaste="return false;"   value="<?php echo $codigo; ?>" maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
		  
		  
			  <div class="form-group">
			   <label for="descripcion" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-text-height"></i></span>
				  <input title="descripcion" type="text" style="text-transform: uppercase;" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="200" autocomplete="off" required>
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
    function unespacio(){
		orig=document.guardar_usuario.descripcion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.descripcion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(descripcion.value.match(/\s\s/)) descripcion.value = descripcion.value.replace('  ', ' ');
}
    </script>

			  
			  
			  

			  <div class="form-group">
			   <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" title="Cantidad" maxlength="20" onkeyup="return noespacios()" onkeypress="return solonumeros(event)" style="text-transform: uppercase;" autocomplete="off">
				</div> 
			  </div>
			  </div>
   <script>
       function noespacios(){
		              orig=document.guardar_usuario.cantidad.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.cantidad.value=nuev;
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
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" class="form-control" style="text-transform: uppercase;" id="precio" name="precio" placeholder="Precio"   title="Precio" onkeyup="return noespacios1()" onkeypress="return solonumeros(event)" maxlength="20" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
			  <script>
                function noespacios1(){
		              orig=document.guardar_usuario.precio.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.precio.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	                   }
                </script>
			  
			 </div>
			 

			 
			 
			 	<div class="agileinfo-row w3ls-row2"> <!--Para pasar el resto de objetos a la otra columna de la derecha-->
                            
                    <script>
                    /*function multiplicar(){
                        cant = document.getElementById("cantidad").value; 
                        prec = document.getElementById("precio").value; 
                        
                        document.getElementById("total").innerHTML= cant*prec;
                    }*/
                    </script>
                    
			 			       
			
			             
			
                            
           
			</div>
              
			 </div>
		 
		 
		 
		   <center>
		 
            

		   <div class="modal-footer">
			<button title="Cerrar ventana" type="submit" onClick="location.reload();"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		

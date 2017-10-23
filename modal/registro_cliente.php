<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button onClick="location.reload();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo cliente</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
		       <div class="form-group">
			   <label for="identidad" class="col-sm-3 control-label">Identidad </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="" class="form-control" id="identidad" name="identidad" placeholder="Identidad  0801..."   title="Identidad" style="text-transform: uppercase;" onkeypress="return solonumeros(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
			  
			  
			  <script>
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
     
     <script type="text/javascript">                
      function noespacios(){
		orig=document.guardar_usuario.identidad.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_usuario.identidad.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
		  
		  
			  <div class="form-group">
			   <label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nombre" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" onkeyup=" return unespacio()" maxlength="70" onPaste="return false;" autocomplete="off" required>
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

function unespacio(){
		orig=document.guardar_usuario.nombre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.nombre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre.value.match(/\s\s/)) nombre.value = nombre.value.replace('  ', ' ');
}

</script>	

			  
			  
			  

			  <div class="form-group">
			   <label for="apellido" class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  type="text" onkeyup="return unespacio1()" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  onPaste="return false;"  maxlength="15" autocomplete="off">
				</div> 
			  </div>
			  </div>
 <script>
function unespacio1(){
		orig=document.guardar_usuario.apellido.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.apellido.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(apellido.value.match(/\s\s/)) apellido.value = apellido.value.replace('  ', ' ');
}

</script>	
	 
	   <div class="form-group">
				<label for="contrasena" class="col-sm-3 control-label">Genero</label>
				 <div class="col-sm-8">
		  		  <div class="input-group">
		  		  
		  		  
		  		   <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female<br>
 
				</div>
			  </div>
			</div> 
		 
			  <div class="form-group">
			   <label for="celular" class="col-sm-3 control-label">Celular</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="celular" name="celular" placeholder="Celular " pattern="^[9|8|3]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="11" autocomplete="off" onkeyup="return noespacios1()" onkeypress="return solonumeros(event)" required>

				</div> 
			  </div>
			  </div>
			  
	<script type="text/javascript">                
      function noespacios1(){
		orig=document.guardar_usuario.celular.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_usuario.celular.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
			 
              
  
			 
              
       

			 </div>
			 
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			       
			         <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono #2 </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
				  <input  type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" pattern="^[9
				  |8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off" required onkeyup="return noespacios2()" onkeypress="return solonumeros(event)">
				</div> 
			  </div>
			  </div>
	<script type="text/javascript">                
      function noespacios2(){
		orig=document.guardar_usuario.telefono.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_usuario.telefono.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>		             
			  <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Correo Electronico</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				    <input title="E-mail" type="text" class="form-control" id="correo_electronico" name="correo_electronico" onkeyup="return noespacios3()" placeholder="Correo Electronico" maxlength="80" onPaste="return false;" required autocomplete="off">
					</div>
				  </div>
				</div>
				
	<script type="text/javascript">                
      function noespacios3(){
		orig=document.guardar_usuario.correo_electronico.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_usuario.correo_electronico.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	      }
      
    </script>
				
				
				
				
			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" style="text-transform: uppercase;" id="direccion" name="direccion" placeholder="Direccion" pattern="[a-zA-Z0-9]{2,64}" title="Usuario"   onPaste="return false;"  maxlength="15" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
				

			   
                            
      
          	 <div class="form-group">          	 	
			 <label for="membresia" class="col-sm-3 control-label">Membresía</label>
			   <div class="col-sm-8">
		  		<div class="input-group">
		  		<select name="membresia" style="text-trandform: uppercase;"  id="membresia"class="form-control">
			<option value="-1">--SELECCIONE ESTADO--</option>
			<option value="si">SI</option>
			<option value="no">NO</option>
			
		</select>
				</div>
			   </div> 
             </div>
                            
           
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
			<button title="Cerrar ventana" type="submit"  class="btn btn-default" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

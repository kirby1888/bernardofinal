<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close"  onClick="location.reload();"data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Cliente</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
		       <div class="form-group">
			   <label for="identidad" class="col-sm-3 control-label">Identidad </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input class="form-control" id="identidad" name="identidad" placeholder0="0801199322065" title="min 13 numeros solo"onPaste="return false;" onkeyup="return noespacios()" onkeypress="return solonumeros(event)"  maxlength="15" autocomplete="off" >
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
		orig=document.editar_usuario.identidad.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.identidad.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
		  
		  
			  <div class="form-group">
			   <label for="nom" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nom" type="text" class="form-control" id="nombre" name="nom" placeholder="Nombres" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
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
		orig=document.editar_usuario.nom.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nom.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nom.value.match(/\s\s/)) nom.value = nom.value.replace('  ', ' ');
}

</script> 

			  <div class="form-group">
			   <label for="apellido" class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;" onkeyup="return unespacio1()" onkeypress="return soloLetras(event)"  onPaste="return false;"  maxlength="70" autocomplete="off">
				</div> 
			  </div>
			  </div>
        <script>
	        function unespacio1(){
		orig=document.editar_usuario.apellido.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.apellido.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(apellido.value.match(/\s\s/)) apellido.value = apellido.value.replace('  ', ' ');
}

</script> 
	 
	  
		 
			  <div class="form-group">
			   <label for="celular" class="col-sm-3 control-label">Celular</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="celular" name="celular" placeholder="99003423" pattern="^[9|8|3]\d{7}$"  title="min 8 numeros solo" onkeypress="return solonumeros(event)" onkeyup="return noespacios1()" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
			 
    <script type="text/javascript">                
      function noespacios1(){
		orig=document.editar_usuario.celular.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.celular.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
  
			 
              
       

			 </div>
			 
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			       
			         <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono  </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
				  <input  type="tel" class="form-control" id="telefono" name="telefono" placeholder="22345678" pattern="^[9
				  |8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" onkeyup="return noespacios2()" onkeypress="return solonumeros(event)" required>
				</div> 
			  </div>
			  </div>
     <script type="text/javascript">                
      function noespacios2(){
		orig=document.editar_usuario.telefono.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.telefono.value=nuev;
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
		orig=document.editar_usuario.correo_electronico.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.correo_electronico.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
				
			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" id="direccion" name="direccion" placeholder="Direccion" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;" onPaste="return false;"  maxlength="200" onkeyup="return unespacio2()" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
	<script>
	        function unespacio2(){
		orig=document.editar_usuario.direccion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.direccion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	   }

	
        function unosolo() {
	       while(direccion.value.match(/\s\s/)) direccion.value = direccion.value.replace('  ', ' ');
        }

    </script> 

			   
                            
      
          	 <div class="form-group">          	 	
			 <label for="membresia" class="col-sm-3 control-label">Membresía</label>
			   <div class="col-sm-8">
		  		<div class="input-group">
		  		 <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
		  		<select name="membresia" style="text-transform: uppercase;"  id="membresia"class="form-control">

			<option value="si">si</option>
			<option value="no">no</option>
			
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
			<button  onClick="location.reload();" title="Cerrar ventana" type="submit"   class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

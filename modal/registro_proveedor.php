<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo proveedor</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
            <div class="form-group">
			   <label for="identidad" class="col-sm-3 control-label">RTN </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="tel" class="form-control" id="RTN" name="RTN" placeholder="RTN" onPaste="return false;" style="text-transform: uppercase;" onkeyup="return noespacios()"   maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
			  <script type="text/javascript">                
                      function noespacios(){
		              orig=document.guardar_usuario.RTN.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.RTN.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	                   }
      
            </script>
		  
<div class="form-group">
			   <label for="Empresa" class="col-sm-3 control-label">Empresa</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="nom" type="text" class="form-control" id="nom_empresa" name="nom_empresa" placeholder="Nombre" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="100" onPaste="return false;" autocomplete="off" required>
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
 <script type="text/javascript">
	function unespacio(){
		orig=document.guardar_usuario.nom_empresa.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.nom_empresa.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(nom_empresa.value.match(/\s\s/)) nom_empresa.value = nom_empresa.value.replace('  ', ' ');
}
</script>	

			  
			  
			  

			  <div class="form-group">
			   <label for="apellido" class="col-sm-3 control-label">Representante</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  type="text" class="form-control" id="representante" name="representante" placeholder="representante"  title="Representante" style="text-transform: uppercase;" onkeyup="return unespacio1()" onkeypress="return soloLetras(event)"  onPaste="return false;"  maxlength="100" autocomplete="off">
				</div> 
			  </div>
			  </div>
<script type="text/javascript">
	function unespacio1(){
		orig=document.guardar_usuario.representante.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.representante.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(representante.value.match(/\s\s/)) representante.value = representante.value.replace('  ', ' ');
}
</script>
	 		 			  
		 
			 <div class="form-group">
			   <label for="celular" class="col-sm-3 control-label">Celular</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="num_tel2" name="num_tel2" placeholder="celular"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;" onkeyup="return noespacios1()"  maxlength="8" autocomplete="off" onkeypress="return solonumeros(event)"   required>

				</div> 
			  </div>
			  </div>
			 
              
  		 <script>
             
                 
           function noespacios1(){
		              orig=document.guardar_usuario.num_tel2.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.num_tel2.value=nuev;
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
			 
              
       

			 </div>
			 
			 	<div class="agileinfo-row w3ls-row2"> 

			       
			           <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
				  <input  type="tel" class="form-control" id="num_tel1" name="num_tel1" placeholder="Telefono" pattern="^[9
				  |8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" onkeyup="return noespacios2()" onkeypress="return solonumeros(event)" required>
				</div> 
			  </div>
			  </div>
                    <script>
                     function noespacios2(){
		              orig=document.guardar_usuario.num_tel1.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.num_tel1.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	                   }
                    </script>
	
			             
			   <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Correo</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				    <input title="E-mail" type="text" class="form-control" id="cor_empresa" name="cor_empresa" placeholder="Correo Electronico" maxlength="100" onPaste="return false;" onkeyup="return noespacios3()" required autocomplete="off">
					</div>
				  </div>
				</div>
				
			<script type="text/javascript">                
                      function noespacios3(){
		              orig=document.guardar_usuario.cor_empresa.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.guardar_usuario.cor_empresa.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	                   }
      
            </script>
				


			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" id="direccion" name="direccion" placeholder="Direccion" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;"   onPaste="return false;" onkeyup="return unespacio2()"  maxlength="200" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
			  
  <script>
    	function unespacio2(){
		orig=document.guardar_usuario.direccion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.direccion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(direccion.value.match(/\s\s/)) direccion.value = direccion.value.replace('  ', ' ');
}
    </script>
				

			   
                    	
			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Tipo Proveedor</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" id="tipo" name="tipo" placeholder="tipo proveedor" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;"   onPaste="return false;" onkeyup="return unespacio4()" onkeypress="return soloLetras(event)"  maxlength="70" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
         <script>
    	function unespacio4(){
		orig=document.guardar_usuario.tipo.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.tipo.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
    function unosolo() {
	while(tipo.value.match(/\s\s/)) tipo.value = tipo.value.replace('  ', ' ');
}
    </script>
        
                            
           
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
			<button title="Cerrar ventana" type="submit" onClick="location.reload();"  class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

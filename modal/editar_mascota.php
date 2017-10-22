<link href="veterinaria/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button"  onClick="location.reload();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Mascota</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
		<div id="wrapper">
					
        <div class="agileinfo-row">
		  
		       <div class="form-group">
			   <label for="id_proveedor" class="col-sm-3 control-label">Id Cliente </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="number" readonly class="form-control" id="id_cliente" name="id_cliente" placeholder="Id Cliente" title="Id del proveedor"onPaste="return false;"  maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
			  <input type="hidden" name="id_mascota" id="id_mascota">

			  
			  
			 <div class="form-group">
			   <label for="descripcion" class="col-sm-3 control-label">Nombre Mascota </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" style="text-transform: uppercase;" class="form-control" id="nom_mascota" name="nom_mascota" placeholder="Nombre mascota" onkeyup="return unespacio4()"   title="nombre mascota" maxlength="30" autocomplete="off" onkeypress="return soloLetras(event)" required>
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
			  
			  
			  

			  <div class="form-group">
			   <label for="especie" class="col-sm-3 control-label">Especie</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" class="form-control" style="text-transform: uppercase;"  id="especie" name="especie" placeholder="Especie" title="Especie" maxlength="50" onkeyup="return unespacio6()" onkeypress="return soloLetras(event)" autocomplete="off">
				</div> 
			  </div>
			  </div>
<script>
    	function unespacio6(){
		orig=document.editar_usuario.especie.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.especie.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(especie.value.match(/\s\s/)) especie.value = especie.value.replace('  ', ' ');
}

</script>	

		 
			  <div class="form-group">
			   <label for="raza" class="col-sm-3 control-label">Raza</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" style="text-transform: uppercase;" class="form-control" id="raza" name="raza" placeholder="Raza"   title="Raza" maxlength="20" onkeypress="return soloLetras(event)" onkeyup="return unespacio7()" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
	<script>
    	function unespacio7(){
		orig=document.editar_usuario.raza.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.raza.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(raza.value.match(/\s\s/)) raza.value = raza.value.replace('  ', ' ');
}

    </script>	

			 </div>
			 
			 
			 
			 
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			<div class="form-group">
			   <label for="sexo" class="col-sm-3 control-label">Sexo </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" class="form-control" style="text-transform: uppercase;"  id="sexo" name="sexo" placeholder="Sexo"   title="Sexo" onkeyup="return unespacio3()" onkeypress="return soloLetras(event)" maxlength="50" autocomplete="off" required>
				</div> 
			  </div>
			  </div>
                   
     <script>
    	function unespacio3(){
		orig=document.editar_usuario.sexo.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.sexo.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(sexo.value.match(/\s\s/)) sexo.value = sexo.value.replace('  ', ' ');
}

    </script>	
                    
              <div class="form-group">
			   <label for="fecha_registro" class="col-sm-3 control-label">Fecha de Nacimiento </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="date" style="text-transform: uppercase;"  class="form-control" id="nazi" name="nazi" placeholder="Fecha de Registro"   title="Fecha de Registro" maxlength="20" autocomplete="off" required>
				</div> 
			  </div>
			  </div>
                     
            <div class="form-group">
			   <label for="descripcion" class="col-sm-3 control-label">Descripcion </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="text" style="text-transform: uppercase;" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" onkeyup="return unespacio5()"   title="Descripcion" maxlength="100" autocomplete="off" required>
				</div> 
			  </div>
			  </div>
    <script>
    	function unespacio5(){
		orig=document.editar_usuario.descripcion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.descripcion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(descripcion.value.match(/\s\s/)) descripcion.value = descripcion.value.replace('  ', ' ');
}

        </script> 
                     

		<script>
    	function unespacio4(){
		orig=document.editar_usuario.nom_mascota.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nom_mascota.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nom_mascota.value.match(/\s\s/)) nom_mascota.value = nom_mascota.value.replace('  ', ' ');
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
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	

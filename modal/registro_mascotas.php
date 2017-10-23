	
<?php

$consulta="select id_cliente, nom_mascota, especie, raza, sexo, nacimiento, descripcion from tbl_mascotas";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
           
?>
	

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"  onClick="location.reload();"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nueva Mascota</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  

		  <div class="form-group">
				<label for="mod_tipo" class="col-sm-3 control-label">Nombre del Cliente</label>
				<div class="col-sm-8">
		  		<div class="input-group">
			  	<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				<select title="Cliente" class='form-control' name='id_cliente' id='id_cliente'  style="text-transform: uppercase;" >
				<?php 
				$query_cod_veh=mysqli_query($mysqli,"SELECT id_cliente, nom_cliente from tbl_clientes WHERE id_cliente <> 12");
				while($rw=mysqli_fetch_array($query_cod_veh))	{
					?>
				<option value="<?php echo $rw['id_cliente'];?>"><?php echo $rw['nom_cliente'];?></option>			
					<?php
				}

				?>
				</select>
				</div>
			  </div>
			 </div>
		       
		  	<input type="hidden" id="hola" name="hola">
			  <div class="form-group">
			   <label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input title="nombre" type="text" class="form-control" id="nom_mascota" name="nom_mascota" placeholder="Nombre de Mascota" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="30" onPaste="return false;" onkeyup="return unespacio()" autocomplete="off" required>
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
		orig=document.guardar_usuario.nom_mascota.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.nom_mascota.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nom_mascota.value.match(/\s\s/)) nom_mascota.value = nom_mascota.value.replace('  ', ' ');
}
</script>	

			  
			  
			  

		      <div class="form-group">
					<label for="especie" class="col-sm-3 control-label">Especie</label>
					<div class="col-sm-8">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					  <select name="especie" id= "especie" class="form-control" style="text-transform: uppercase;">						  
						  <option value="Canino">Canino</option>						  
						  <option value="Felino">Felino</option>						  
						  <option value="Otros">Otros</option>				  
						</select>
					</div>
				  </div>
                </div>


	 
	  <div class="form-group">
			   <label for="raza" class="col-sm-3 control-label">Raza</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list "></i></span>
				  <input  type="text" class="form-control" id="raza" name="raza" placeholder="Raza"   title=""onPaste="return false;" onkeypress="return soloLetras(event)" onkeyup="return unespacio1()"  maxlength="20" autocomplete="off" style="text-transform: uppercase;" >
				</div> 
			  </div>
			  </div>
			  
	<script>
    	function unespacio1(){
		orig=document.guardar_usuario.raza.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.raza.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(raza.value.match(/\s\s/)) raza.value = raza.value.replace('  ', ' ');
}
    </script>
		  
			
			 <div class="form-group">
				<label for="sexo" class="col-sm-3 control-label">Sexo</label>
				  <div class="col-sm-8">
					<div class="input-group">
			  	      <span class="input-group-addon"><i class="glyphicon glyphicon-list "></i></span>
					   <select name="sexo" id= "sexo" class="form-control" style="text-transform: uppercase;">						  
						  <option value="Macho">Macho</option>						  
						  <option value="Hembra">Hembra</option>				  
						</select>
					</div>
				  </div>
                </div>

		
			 </div>
			 
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			       
			         <div class="form-group">
			   <label for="nacimiento" class="col-sm-3 control-label">Fecha de Nacimiento</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				  <input  type="date" class="form-control" id="nacimiento" name="nacimiento"  title="Fecha de Nacimiento" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off" required>
				</div> 
			  </div>
			  </div>
			             
			  
				
			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" style="text-transform: uppercase;" id="descripcion" name="descripcion" placeholder="Descripcion" title="Descripcion" onkeyup="return unespacio2()" onkeypress="return soloLetras(event)"   onPaste="return false;" maxlength="100"   autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
    <script>
    	function unespacio2(){
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
			<button title="Cerrar ventana" type="submit"  class="btn btn-default" data-dismiss="modal";" >Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	



		<?php

$consulta="select id_tipo, nombre from tbl_tiposervicios";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
           
	?>
	
	<div class="modal fade" id="myModalservicios2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Servicio</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
		
           <div class="form-group">
				<label for="mod_tipo" class="col-sm-3 control-label">Tipo de Servicio</label>
				<div class="col-sm-8">
		  		<div class="input-group">
			  	<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				<select title="tipo de servicio" class='form-control' name='mod_tipo' id='mod_tipo' onchange="load(1);" >
				<?php 
				$query_cod_veh=mysqli_query($mysqli,"SELECT id_tipo,nombre from tbl_tiposervicios WHERE id_tipo <> 12");
				while($rw=mysqli_fetch_array($query_cod_veh))	{
					?>
				<option value="<?php echo $rw['id_tipo'];?>"><?php echo $rw['nombre'];?></option>			
					<?php
				}

				?>
				</select>
				</div>
			  </div>
			 </div>

			  <div class="form-group">
			   <label for="nom_servicio" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"></span>
				  <input title="nombre" type="text" class="form-control" id="nom_servicio" name="nom_servicio" placeholder="Nombre del servicio" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="30" onPaste="return false;" autocomplete="off" required>
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
				<label for="precio" class="col-sm-3 control-label">Precio</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"></span>
				    <input title="precio" class="form-control" id="precio" name="precio" placeholder="Precio del servicio" maxlength="80"  onkeypress="return soloNumeros(event)"onPaste="return false;" required autocomplete="off">
					</div>
				  </div>
				</div>
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
              
              
		  <div class="modal-footer">
			<button title="Cerrar ventana" type="button" onClick="location.reload();" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	
	
	    <script>  
                
			$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
			
			
						$(document).on('ready', function() {
			$('#show-hide-passwd1').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
	</script>

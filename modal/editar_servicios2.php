<?php
require_once ("funcs/conexion.php");
$consulta="select id_tipo, nombre from tbl_tiposervicios";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
           
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Servicio</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_tipo2" class="col-sm-3 control-label">Tipo</label>
				<div class="col-sm-8">
				  <select class='form-control' name='mod_tipo2' id='mod_tipo2' onchange="load(1);">
							<option value="">Seleccione un servicio</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_tiposervicios where id_tipo <> 12 order by id_tipo");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_tipo'];?>"><?php echo $rw['nombre'];?></option>			
								<?php
							}

							?>
						</select>
				</div>
			  </div>
			<div class="form-group">
				<label for="nom_servicio2" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nom_servicio2" name="nom_servicio2" autocomplete="off" style="text-transform: uppercase;" placeholder="Nombre del servicio" required>
				  <input type="hidden" id="mod_id" name="mod_id">
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
				<label for="precio2" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio2" name="precio2" style="text-transform: uppercase;" autocomplete="off" placeholder="precio del servicio" required>
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
			<button type="button" class="btn btn-default" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
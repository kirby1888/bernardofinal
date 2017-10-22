
	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar consulta</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
		  <div class="form-group">
				<label for="nombres" class="col-sm-3 control-label">Mascota</label>
				<div class="col-sm-8">
				  <select class='form-control' name='nombres' id='nombres' onchange="load(1);">
							<option value="">Seleccione una mascotal</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_mascotas order by id_mascota");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_mascota'];?>"><?php echo $rw['nom_mascota'];?></option>			
								<?php
							}

							?>
						</select>
						 <input  type="hidden" id="mod_id" name="mod_id">	 	 
			
				</div>
			  </div>

			  <div class="form-group">
				<label for="motivos" class="col-sm-3 control-label">Motivo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="motivos" name="motivos" placeholder="motivo" maxlength="200" required title="motivo de la visita">
				</div>
			  </div>
	           <div class="form-group">
				<label for="sintomas1" class="col-sm-3 control-label">Sintomas</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="sintomas1" name="sintomas1" placeholder="sintomas" maxlength="200" required title="Sintmoas que presenta la mascota">
				</div>
			  </div>
			  
			    <div class="form-group">
				<label for="tratamientos" class="col-sm-3 control-label">Tratamientos</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="tratamientos" name="tratamientos" placeholder="tratamientos" maxlength="200" required title="Tratamiento sugerido">
				</div>
			  </div>
					
		  </div>
		  <div class="modal-footer">
			<button title="Cerrar Ventana" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Cerrar Ventana" type="submit" class="btn btn-primary"  id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
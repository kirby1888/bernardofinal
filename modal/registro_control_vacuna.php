
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo control</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			    

			  
			  
           <div class="form-group">
				<label for="nombres" class="col-sm-3 control-label">Nombre de la mascota</label>
				<div class="col-sm-8">
				  <select class='form-control' name='nombres' id='nombres' placeholder="Nombre de la mascota" onchange="load(1);">
							<option value="">Seleccione la mascotal</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_mascotas order by id_mascota");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_mascota'];?>"><?php echo $rw['nom_mascota'];?></option>			
								<?php
							}

							?>
						</select>
						<input  type="hidden" id="id" name="id">
				</div>
			  </div>
			  
			   <div class="form-group">
				<label for="vacunas" class="col-sm-3 control-label">Vacuna</label>
				<div class="col-sm-8">
				  <select class='form-control' name='vacunas' id='vacunas'  placeholder="Nombre de la vacuna aplicada "onchange="load(1);">
							<option value="">Seleccione la vacuna a aplicar</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_tipvacunas order by id_tipovacuna");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_tipovacuna'];?>"><?php echo $rw['nombre'];?></option>			
								<?php
							}

							?>
						</select>
						
				</div>
			  </div>
			  	<div class="form-group">	 
              <label for="cc/ml1" class="col-sm-3 control-label">Cantidad de CC/ML</label>
				<div class="col-sm-8">
				  <input title="Cantidad de CC o ML aplicados" type="text" class="form-control" id="cc/ml1" name="cc/ml1" placeholder="Cantida de CC/ML a aplicar" style="text-transform: uppercase;"  maxlength="50"  onPaste="return false;" required> 
				</div>
			  </div>
                    
                     <div class="form-group">	 
              <label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
				  <input title="Descripcion de la vacuna aplicada" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion de la vacuna aplicada" style="text-transform: uppercase;"   maxlength="200"  onPaste="return false;" required> 
				 
				</div>
			  </div>
			  		  
			   <div class="form-group">
			   <label for="proxima" class="col-sm-3 control-label">Fecha de la proxima vacuna </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="date" class="form-control" id="proxima" name="proxima" placeholder="Fecha de la proxima vacuna"   title="Fecha de  la proxima vacuna" maxlength="20" autocomplete="off" required>
				</div> 
			  </div>
			  </div>
	
			           
		  </div>
              
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>

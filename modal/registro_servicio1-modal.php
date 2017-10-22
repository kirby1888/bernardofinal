<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo servicio</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
		<div id="resultados_ajax"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
      
      		  <div class="form-group">
			   <label for="id_proveedor" class="col-sm-3 control-label">Id del mascota </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  </div> 
			  </div>
			  </div>
      
      
      
      
		  
		       <div class="form-group">
			   <label for="id_proveedor" class="col-sm-3 control-label">Id del mascota </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="number" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Id-proveedor" title="Id del proveedor"onPaste="return false;"  maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
		  
		  
			  <div class="form-group">
			   <label for="descripcion" class="col-sm-3 control-label">Servicio</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-text-height"></i></span>
				  <input title="descripcion" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" maxlength="200" autocomplete="off" required>
				</div>
			  </div>
			  </div>

		 
			  <div class="form-group">
			   <label for="precio" class="col-sm-3 control-label">Costo</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input  type="number" class="form-control" id="precio" name="precio" placeholder="Precio"   title="Precio" maxlength="20" autocomplete="off" required>

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
		
	

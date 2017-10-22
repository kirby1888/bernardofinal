<div class="header-right"  >
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
								<ul class="nav navbar-nav">
									<li><a class="active" href="index.php">Home</a></li>
									<?php
										if ($_SESSION['id_rol']==1){?>
									<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administracion<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuario</a></li>
											<li><a class="hvr-bounce-to-bottom" href="parametros.php">Parametros</a></li>
											<li><a class="hvr-bounce-to-bottom" href="cliente.php">Cliente</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="mascota.php">Mascota</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="proveedores.php">Proveedor</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="tipo_servicios.php">Tipo Servicios</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="servicios.php">Servicios</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="compras.php">Productos</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
                                                 <li><a class="hvr-bounce-to-bottom" href="vacunas.php">Vacunas</a></li>
										</ul>
									</li>

                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Historial Citas<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="calendar.php">Programación Citas</a></li>
											<li><a class="hvr-bounce-to-bottom" href="expediente.php">Expedientes</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="atencion_citas.php">Atención Citas</a></li>
										</ul>
									</li>

                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="listado.php">Lista de Servicio</a></li>
											<li><a class="hvr-bounce-to-bottom" href="farmacia.php">Farmacia</a></li>
										</ul>
									</li>



                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Caja<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="factura.php">Factura</a></li>
											<li><a class="hvr-bounce-to-bottom" href="ingreso.php">Ingresos</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="egreso.php">Egreso</a></li>
										</ul>
									</li>

                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="caja.php">Caja</a></li>
											<li><a class="hvr-bounce-to-bottom" href="reportes.php">Clientes</a></li>

										</ul>
									</li>


		
											<?php } ?>
            
                  


                                                      <li><a href='logout.php'>Salir</a></li>

								</ul>
								<div class="clearfix"> </div>
							</div>
							
							
						</nav>
					</div>

				</div>

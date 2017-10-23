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
												<li><a class="active" href="principal.php">Inicio</a></li>
									<?php
										if ($_SESSION['id_rol']==1){?>
									<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<spa class="caret"></span></a>
													<ul class="dropdown-menu">
								            
											<li><a class="hvr-bounce-to-bottom" href="cliente.php">Cliente</a></li>
											<li><a class="hvr-bounce-to-bottom" href="mascota.php">Mascota</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="servicios.php">Servicios</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="tipo_servicios.php">Tipo Servicios</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="parametros.php">Parametros</a></li>
													</ul>
												</li>
                                    
                                     <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transacciones<span class="caret"></span></a>
													<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="facturas.php">Facturas</a></li>
											<li><a class="hvr-bounce-to-bottom" href="compras.php">Compras</a></li>
											<li><a class="hvr-bounce-to-bottom" href="proveedores.php">Proveedor</a></li>
											<li><a class="hvr-bounce-to-bottom" href="productos.php">Productos</a></li>
													</ul>
												</li>
                                    
                                     <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atenciones<span class="caret"></span></a>
													<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="calendar.php">Calendario</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="consultas.php">Consultas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="atenciones.php">PETuqueria</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="vacunas.php">Vacunas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="control_vacunas.php">Control Vacunas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="historial.php">Historial Médico</a></li>
													</ul>
												</li>
                                    
                                    

                                     <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad<span class="caret"></span></a>
													<ul class="dropdown-menu">
																				
											<li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuarios</a></li>							
										    <li><a class="hvr-bounce-to-bottom" href="roles.php">Roles</a></li>                                               
                                            <li><a class="hvr-bounce-to-bottom" href="roles_objeto.php">Roles Objetos</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="backup.php">Backup</a></li>
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

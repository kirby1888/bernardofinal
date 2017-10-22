
												
<!-- Estructura de nuevo menu -->
                                                                                           
<?php

require 'funcs/conexion.php';
if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();   
$consultar1=getPer('permiso_consulta',$rol,'1');
$consultar2=getPer('permiso_consulta',$rol,'2');
$consultar3=getPer('permiso_consulta',$rol,'3');
$consultar4=getPer('permiso_consulta',$rol,'4');
$consultar5=getPer('permiso_consulta',$rol,'5');
$consultar6=getPer('permiso_consulta',$rol,'6');
$consultar7=getPer('permiso_consulta',$rol,'7');
$consultar8=getPer('permiso_consulta',$rol,'8');
$consultar9=getPer('permiso_consulta',$rol,'9');
$consultar10=getPer('permiso_consulta',$rol,'10');
$consultar11=getPer('permiso_consulta',$rol,'11');
$consultar12=getPer('permiso_consulta',$rol,'12');
$consultar13=getPer('permiso_consulta',$rol,'13');
$consultar14=getPer('permiso_consulta',$rol,'14');
$consultar15=getPer('permiso_consulta',$rol,'15');
$consultar16=getPer('permiso_consulta',$rol,'16');
$consultar17=getPer('permiso_consulta',$rol,'17');
$consultar18=getPer('permiso_consulta',$rol,'18');
$consultar19=getPer('permiso_consulta',$rol,'19');
$consultar20=getPer('permiso_consulta',$rol,'20');
$consultar21=getPer('permiso_consulta',$rol,'21');
        
		$objeto="Menu";
		$accion="Acceso";
		$descripcion="Acceso al menu";	
		$bita=grabarBitacora($idUsuario,$objeto,$accion,$descripcion);
			
}else{
	header ("Location: index.php");
}


?>     


								
										       <?php
										if ($consultar1==1){?>
											<li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuario</a></li>
											<?php } ?>
											    <?php
										if ($consultar2==1){?>
											<li><a class="hvr-bounce-to-bottom" href="parametros.php">Parámetros</a></li>
											<?php } ?>
												<?php
										if ($consultar3==1){?>
											<li><a class="hvr-bounce-to-bottom" href="cliente.php">Cliente</a></li>
                                           <?php } ?>
                                           		<?php
										if ($consultar4==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="mascota.php">Mascota</a></li>
                                            <?php } ?>
                                            	<?php
										if ($consultar5==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="proveedores.php">Proveedor</a></li>
                                            <?php } ?>
                                               	<?php
										if ($consultar6==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="servicios2.php">Tipo Servicios</a></li>
                                            <?php } ?>
                                            	<?php
										if ($consultar7==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="servicios.php">Servicios</a></li>
                                             <?php } ?>
                                             	<?php
										if ($consultar8==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="compras.php">Productos</a></li>
                                             <?php } ?>
                                             	<?php
										if ($consultar9==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar10==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="vacunas.php">Vacunas</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar11==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="control_vacunas.php">Control Vacunas</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar12==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="compras.php">Compras</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar13==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="facturas.php">Facturas</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar14==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="roles.php">Roles</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar15==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="roles_objeto.php">Roles Objetos</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar16==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="backup.php">Backup</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar17==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="calendar.php">Calendario</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar18==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="consultas.php">Consultas</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar19==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="peluqueria.php">PEtuqueria</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar20==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="historial.php">Historial Médico</a></li>
                                                <?php } ?>
                                                <?php
                                        if ($consultar21==1){?>
                                            <li><a class="hvr-bounce-to-bottom" href="control_receta.php">Recetas</a></li>
                                                <?php } ?>                                                                        
										</ul>
								
                <link rel="stylesheet" type="text/css" href="css/es1.css">

<div class="banner about-banner">
    <div class="header about-header">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <img src="images/pro.png" alt="image" height="80" width="80">
                </div>
            </div>
            <div class="header-right"  >
                                <div class="top-nav">
                                    <nav class="navbar ">
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


  	                                 
                  <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="cliente.php">Cliente</a></li>
											<li><a class="hvr-bounce-to-bottom" href="mascota.php">Mascota</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="servicios.php">Servicios</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="servicios2.php">Tipo Servicios</a></li>
                                             <li><a class="hvr-bounce-to-bottom" href="parametros.php">Parametros</a></li>
										</ul>
									</li>

                <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transacciones<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="facturas.php">Facturas</a></li>
											<li><a class="hvr-bounce-to-bottom" href="compras.php">Compras</a></li>
											<li><a class="hvr-bounce-to-bottom" href="proveedores.php">Proveedor</a></li>
											<li><a class="hvr-bounce-to-bottom" href="compras.php">Productos</a></li>
										</ul>
									</li>



                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atenciones<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="calendar.php">Calendario</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="consultas.php">Consultas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="peluqueria.php">PETuqueria</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="vacunas.php">Vacunas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="control_vacunas.php">Control Vacunas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="historial.php">Historial Médico</a></li>
                                            
										</ul>
									</li>

                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuario</a></li>
											<li><a class="hvr-bounce-to-bottom" href="reportes.php">Clientes</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="roles.php">Roles</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="roles_objeto.php">Roles Objetos</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="backup.php">Backup</a></li>
										</ul>
									</li>


		
											
            
                  


                                                      <li><a href='logout.php'>Salir</a></li>

								</ul>
								<div class="clearfix"> </div>
							</div>
							
							
						</nav>
					</div>

				</div>

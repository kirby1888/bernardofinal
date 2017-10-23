<?php

session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Parametros</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/es.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
    <link rel="stylesheet" href="./ventana emergente/colorbox.css" />
    <script src="./ventana emergente/jquery.min.js"></script>
    <script src="./ventana emergente/jquery.colorbox.js"></script>
<!-- //font-awesome icons -->
    
    
    <!-- Libreria para mensajes de alerta -->
<script src="./dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="./dist/sweetalert.css">

<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
    
    
    <script src="./javascript/myjava.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
	<?php include("menu.php"); ?>
    
    
<script type="text/javascript">

function roles_objeto_seleccionado(rol,objeto,ck_consultar,ck_insertar,ck_actualizar,ck_eliminar){

document.getElementById('combo_roles').value = rol ;
document.getElementById('combo_objeto').value = objeto ;
document.getElementById('ck_consultar').value = ck_consultar ;
document.getElementById('ck_insertar').value = ck_insertar ;
document.getElementById('ck_actualizar').value = ck_actualizar ;
document.getElementById('ck_eliminar').value = ck_eliminar ;

}    

</script>

    
   
    
    
    
    
</head>
    <body>
    <div class="about-heading">	
			<div class="con">
				Roles Objetos
		</div>
	</div>

<?php 
require("./roles_objeto_bd.php"); 

 ?>
<script src="./javascript/myjava.js"></script>
<script type="text/javascript">

function roles_objeto_seleccionado(rol,objeto,ck_consultar,ck_insertar,ck_actualizar,ck_eliminar){

document.getElementById('combo_roles').value = rol ;
document.getElementById('combo_objeto').value = objeto ;
document.getElementById('ck_consultar').value = ck_consultar ;
document.getElementById('ck_insertar').value = ck_insertar ;
document.getElementById('ck_actualizar').value = ck_actualizar ;
document.getElementById('ck_eliminar').value = ck_eliminar ;

}    

</script>



<script type="text/javascript">
function redirect2(){
    window.location.replace("./roles.php");
}
</script>

<script type="text/javascript">
function redirect3(){
    window.location.replace("./objeto_pantalla.php");
}
</script>
        
        
    <div class="contact-top">
    <div class="container">
	<div class="panel panel-success">
        
        
        
        	<?php
            
			    
          include("modal/editar_permisos.php");
                
			?>
        
        <div class="panel-heading">
            <form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" accept-charset="UTF-8" class="form-conteiner" name = "f1">
<input type="hidden" id="id_oculto_rol" name="id_oculto_rol">
<input type="hidden" id="id_oculto_objeto" name="id_oculto_objeto">
                
                
                
                <span class="glyphicon glyphicon-plus" ></span> Nuevo Permiso
            <div class="btn-group pull-right">
                 <input type="submit"    class="btn btn-success" id="id_btn_guardar"  name="btn_guardar"  >
            </div>
      




 

        </div>

<table width="100%">
<tr> 
    <td width="5%"></td>
    <td width="15%"><b> Seleccione el Rol:</b></td>
    <td width="15%">
    <select class="select" id="combo_roles" name="combo_roles">

    <!--//seleccionamos id rol y nombre del rol de la tabla roles y las metemos en variable $sql .
    luego verificamos la conexion,luego entramos a una codicion si numero de columnas es mayor q 0 -->

    	<?php 

    $sql = "SELECT id_rol, rol FROM tbl_roles";
    $result = $conn->query($sql);
    echo "<option selected = 'selected' disabled = 'disabled'> Elija un Rol</option>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        //codigo generado por php
            echo "<option value='".$row['id_rol']."'>".$row['rol']."</option>"; 
        }
    } 
    	?>

    </select> 
    </td>

   
    <td rowspan="2">
            <br>
            <input type="checkbox"  id="ck_todos" name = 'ck_todos' style="margin-left:20px" onclick="seleccionar_todo();"  ondblclick="deseleccionar_todo();">Marcar Todos
            <br>
            <input type="checkbox"  id="ck_consultar" name = 'ck_consultar' style="margin-left:20px">Consultar
            <br>
            <input type="checkbox" id="ck_insertar" name = 'ck_insertar'style="margin-left:20px">Insertar
            <br>
            <input type="checkbox" id="ck_actualizar" name = 'ck_actualizar' style="margin-left:20px">Actualizar
            <br>
            <input type="checkbox" id="ck_eliminar" name = 'ck_eliminar' style="margin-left:20px">Eliminar
            <br><br>  
    </td>
   
</tr>

<tr>
<td></td>
<td><b>Objeto:</b></td>
<td>
<select class="select" id="combo_objeto" name="combo_objeto">

<!--//seleccionamos id rol y nombre del rol de la tabla roles y las metemos en variable $sql .
luego verificamos la conexion,luego entramos a una codicion si numero de columnas es mayor q 0 -->

	<?php 

$sql = "SELECT id_objeto, objeto FROM tbl_pantallas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<option selected = 'selected' disabled = 'disabled'> Elija una Pantalla</option>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //codigo generado por php
        echo "<option value='".$row['id_objeto']."'>".$row['objeto']."</option>"; 
    }
} 
	?>

</select> 
 </td>

        </tr>
    
    
        </table>
   
 
   </form> 
    
    
   
    <div class="dataTables_length" id="tableListar_length">
     <table class="table" id="tableListar" width = "100%">
     <thead>
    <tr  class="success">
         <th>Id</th>
        <th>Rol</th>
        <th>Objeto</th>
        <th>Consulta</th>
        <th>Inserción</th>
        <th>Eliminación</th>
        <th>Actualización</th>
         <th>opciones</th>
    </tr>
    </thead>
    <tbody>

    <?php

$sql = " SELECT tbl_roles_objeto.id_rol,tbl_roles_objeto.id_permiso ,tbl_roles.rol as nombre_rol, tbl_pantallas.id_objeto, tbl_pantallas.objeto as nombre_objeto, tbl_roles_objeto.permiso_consulta, tbl_roles_objeto.permiso_insercion,tbl_roles_objeto.permiso_eliminacion,tbl_roles_objeto.permiso_actualizacion FROM tbl_pantallas INNER JOIN tbl_roles  INNER JOIN tbl_roles_objeto  ON tbl_roles_objeto.id_rol = tbl_roles.id_rol AND tbl_roles_objeto.id_objeto = tbl_pantallas.id_objeto ORDER BY tbl_roles_objeto.id_objeto ";
$result = $conn->query($sql);
$num_fila = 0;
while($row = $result->fetch_assoc()) {
$num_fila = $num_fila + 1 ;
$id= $row["id_permiso"];  
$id_rol= $row["nombre_rol"];   
$id_objeto = $row["nombre_objeto"];   
$permiso_consulta = $row['permiso_consulta'];
$permiso_insecion = $row['permiso_insercion'];
$permiso_eliminacion = $row['permiso_eliminacion'];
$permiso_actualizacion = $row['permiso_actualizacion'];



        ?>
        <tr  onclick='javascript:roles_objeto_seleccionado("<?php echo $id_rol; ?>","<?php echo $id_objeto; ?>","<?php echo $permiso_consulta; ?>","<?php echo $permiso_insercion; ?>","<?php echo $permiso_actualizacion; ?>","<?php echo $permiso_eliminacion; ?>");' >
        <?php
      echo "<td>".$row['id_permiso']."</td>";
        echo "<td>".$row['nombre_rol']."</td>";
        echo "<td>".$row['nombre_objeto']."</td>";
        echo "<td>".$row['permiso_consulta']."</td>";
        echo "<td>".$row['permiso_insercion']."</td>";
        echo "<td>".$row['permiso_eliminacion']."</td>";
        echo "<td>".$row['permiso_actualizacion']."</td>";
    
      ?>
    
           <td>
                        
        <a href="#" class='btn btn-default' title='Editar Permiso'  data-toggle="modal" data-target="#myModal2" onclick='capturar("<?php echo $row['id_permiso'];?>","<?php echo $row['permiso_consulta'];?>","<?php echo $row['permiso_insercion'];?>","<?php echo $row['permiso_actualizacion'];?>","<?php echo $row['permiso_eliminacion'];?>" )' ><i class="glyphicon glyphicon-edit"></i></a>
               
               
               
             
                  
                  	 <a href="#" class='btn btn-default' title='Eliminar Permiso'    data-toggle="modal" data-target="#myModal4" onclick='capturar_eli("<?php echo $row['id_permiso'];?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
            
						
               
                 
        	<?php
            
			    
          include("modal/eliminar_permisos_modal.php");
                
			?>
             
               
               
                </td>
    
    
    <?php
        echo "</tr>";
    }
  ?>
             
</tbody>
</table>
        
        
        
      

      

    
     <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
<script>
    
    
    
    
		   	$(document).ready(function(){
			load(1);
		});
        
        $( "#editar_usuario" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_permiso.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
        
             	function capturar(id,consulta,inser,edi,eli){ 				
			$("#df").val(id);
                     $("#con").val(consulta);
		      $("#inser").val(inser);
              $("#edi").val(edi);
                     $("#eliminar").val(eli); 

                    
                    
		}	
           	function capturar_eli(id){ 				
			$("#moda").val(id);
    	}	
    
    
    
   
        </script>


        </div>
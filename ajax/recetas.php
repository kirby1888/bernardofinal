<?php 
    session_start();
require 'funcs/funcs.php';

$id_mascota=$_SESSION['mascota'];
$mascota=getMasco('nom_mascota','id_mascota',$id_mascota);













$a=1;

if(!isset($_SESSION['mascota'])){
    header ("Location: index.php");
}
echo $a;
    ?>
<!DOCTYPE html>

<header>
<link rel="shortcut icon" href="./css/images/favicon.ico">
<link rel="shortcut icon" href="./css/images/prueba.ico"/>
<meta charset="utf-8">

<!-- Estilo general del Menu -->
<link rel="stylesheet" href="./css/estilo_principal.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<link rel="stylesheet" href="./css/botones.css"  type="text/css" />
<script src="./javascript/funciones.js"></script>
<!-- Libreria para mensajes de alerta -->
<script src="./dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="./dist/sweetalert.css">

    
    
    
    
       <script src="./ventana emergente/jquery.min.js"></script>
    <script src="./ventana emergente/jquery.colorbox.js"></script>
<!-- //font-awesome icons -->
    
    
    <!-- Libreria para mensajes de alerta -->
<script src="./dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="./dist/sweetalert.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="./css/estilos_lightbox.css">



    

    <script type="text/javascript">
        function openVentana(){
            $(".ventana").slideDown("slow");
        }
        function closeVentana(){
            $(".ventana").slideUp("slow");
        }
    </script>

        
<!-- Libreria para ventana emergente -->
<link rel="stylesheet" href="./ventana emergente/colorbox.css" />
    <script src="./ventana emergente/jquery.min.js"></script>
    <script src="./ventana emergente/jquery.colorbox.js"></script>
    <!-- Libreria para Reloj -->
<link rel="stylesheet" href="./reloj/flipclock.css">
<script type="text/javascript" src="./reloj/jquery.min.js"></script>
<script src="./reloj/flipclock.js"></script>	

<!-- Libreria para tablas -->
<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="./js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="./js/jquery.dataTables.js"></script>




</header>


<body>

<table width="100%" >




   
<td  width="80%" class="banner_principal">
 <!-- MUESTRA ENCABEZADO DEL APLICATIVO -->
 <!-- RESTRICCION DE BUSCADOR DEL NAVEGADOR WEB   -->

 <!--EN LA PANTALLA NO MUESTRA NINGUN ERROR-->
 <!-- HACE LA EJECUCION DE OPERACIONES -->
 <!-- LLAMAR VALIDACIONES DE CARACTERES -->

<!---SCRIPT PARA VISUALIZAR LAS PESTAÑAS -->

<!--- TERMINA SCRIPT PARA VISUALIZAR LAS PESTAÑAS -->


<!-- SCRIPT PARA EL DOBLE CLIC EN TABLA PARA ACTUALIZAR -->
<script type="text/javascript">

  function recetas(contador, prescripcion){

    document.getElementById("id_oculto").value = contador;
    document.getElementById("txt_prescripcion").value = prescripcion;
  }
</script>
<!--TERMINA SCRIPT PARA EL DOBLE CLIC EN TABLA PARA ACTUALIZAR -->
<?php 
 require("./recetas_bd.php"); 

 ?>


<!--CREACION DEL FORMULARIO-->
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" accept-charset="UTF-8" class="form-conteiner">
  <input type="hidden" id="id_oculto" name="id_oculto"> <!-- LLAMA AL ID AL HACER DOBLE CLIC -->
  <input type="hidden" id="id_oculto2" name="id_oculto2" value = ""> <!-- LLAMA AL ID AL HACER DOBLE CLIC -->
     
<div class="btnlateral" style="float:right">
		<input type="submit" class="" id="id_btn_limpiar"  name="btn_limpiar" >
	 <input type="submit" class="" id="id_btn_guardar"  name="btn_guardar"  > 
		<input type="submit" class="" id="id_btn_eliminar"  name="btn_eliminar"> 
		 <input type="submit" class="" id="id_btn_imprimir"  name="btn_imprimir" value="Imprimir"> 		 
		 <a href="./calendario.php"> <input type="link" class="p_s_botonca" id="id_btn_calendario"  name="btn_calendario" value="Calendario"></a> 
		
</div>


 <!-- LLAMA  ESTILOS DE LOS BOTONES  -->

  <div id="wrapper"  align="center" >
    <div id="tabContainer">
    
     
      <div class="tabscontent">

        <div class="titulo" align="center"><h4 >BERNARDOS</h4><h4>CENTRO DE SALUD INTEGRAL</h4></div>
    

        <table width = "100%"  >

          <tr>
            <td ></td>
            <td><b>Doctor:</b></td>
            <td>
              <input tabindex=2 type="text" style = "width: 50%;" readonly  name="txt_diagnostico" id="txt_diagnostico" placeholder="Doctor..." >  
            </td>
          </tr>

          <tr > 
            <td></td>

            <td >
              <b>Nombre:</b>
            </td>
            <td>
              <input tabindex=2 type="text" readonly style="width:50%" value="<?php echo $mascota; ?>" name="txt_paciente" id="txt_paciente" >              </td>
          </tr>

          <tr>
            <td width="2%"></td>
            <td><b>Fecha:</b></td>

            <td>
              <input type="date"  name="txt_fecha" id="txt_fecha"  value="2017-10-19" class = "fecha"    > 
            </td>
          </tr>

        </table>
        <br>
        <!-- MUESTRA LA TABLA PARA INGRESAR LA PRESCIPCION -->
        <fieldset  style="border:5px;">
          <LEGEND><b>PRESCRIPCIÓN</b></LEGEND>

          <textarea name="txt_prescripcion" maxlength="600" class="prescripcion" id="txt_prescripcion" placeholder="PRESCRIPCION..."  style="backgroun;red" ></textarea>
          <br><br> <br>
             <input type="submit" class="" id="id_btn_guardar"  name="btn_guardar"  > 
          <hr  width="28%">
          FIRMA Y SELLO
          <br>
          <br>

          <div aliang = center style="color:black">
            "Querido hermano, oro para que te vaya bien en todos tus asuntos y goces de buena salud,  <br>
            así como prosperas espiritualmente." III de Juan 1:2
          </div>
        </fieldset >
 <!-- TERMINA LA TABLA PARA INGRESAR LA PRESCIPCION -->
      </div>
    </div>
  </div>
<!--INICIA TABLA DE MUESTRA Y BUSQUEDAS DE REGISTROS-->

<!--TERMINA TABLA DE MUESTRA Y BUSQUEDAS DE REGISTROS -->

<!-- MUESTRA LOS DATOS GUARDADOS EN LA PANTALLA DE PARAMETROS -->
<!-- TERMINA DE MOSTRAR LOS DATOS GUARDADOS EN LA PANTALLA DE PARAMETROS -->

</form>
<!--TERMINACION DEL FORMULARIO-->


</td>

 






</table>

</body>
</html>

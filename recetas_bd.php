

<?php require ("config/conexion2.php"); 
if (isset($_POST['btn_limpiar'])) {

  ?>
  <script type="text/javascript">

    document.getElementById('txt_nombre').value = '';
    document.getElementById('txt_fecha').value = '';
    document.getElementById('txt_prescripcion').value = '';

  </script>
  <?php  
}
/*TERMINA BOTON LIMPIAR*/











/*BOTON GUARDAR*/
if (isset ($_POST['btn_guardar'])) {

  if ( (empty($_POST['txt_paciente'])) AND (empty($_POST['txt_fecha'])) or ($_POST['txt_prescripcion'] == "" || ctype_space($_POST['txt_prescripcion']))   ) {
   ?>
   <script type="text/javascript">
    sweetAlert("No Puede Dejar Campos En Blanco "); 
  </script>
  <?php 

} elseif (strlen($_POST['txt_prescripcion']) < 2 ) {
  $_prescripcion = strtoupper($_POST['txt_prescripcion']);
  ?>
  <!-- SCRIPT ALERTA CONFIRMAR -->
  <script>
    swal({
      title: 'Debe Ingresar Más de Una Letra!',
      text: 'Por favor Verifique los Datos',
      type: 'warning',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar',
      closeOnConfirm: true,
      closeOnCancel: true
    },
    function(isConfirm) {
      if (isConfirm) {
        var prescripcionn = "<?php echo $_prescripcion ?>"
        var v = document.getElementById("txt_prescripcion");  
        v.style.borderColor = 'red';
        document.getElementById('txt_prescripcion').value = prescripcionn;
      } 
    });
  </script>
  <?php 
  /* TERMINA EL SCRIPT DEL ALERT */
} 

else{


      


 /* $query_id = mysqli_query($conn, "SELECT id_consulta FROM `tbl_consulta` ORDER BY `id_consulta` DESC LIMIT 1");

            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo= $data_id['id_consulta'];*/

  $codigo= "2";

  

      $_diagnostico = $_POST['id_oculto2'];
      $_fecha = $_POST['txt_fecha'];
      $_nombre = strtoupper($_POST['txt_paciente']);
      $_prescripcion = strtoupper($_POST['txt_prescripcion']);

      $sql = "INSERT INTO tbl_receta (id_diagnostico, nombre_paciente, fecha_receta, prescripcion) VALUES ('$codigo','$_nombre','$_fecha', '$_prescripcion')";

      if ($conn -> query($sql) == TRUE){  
       ?>

      <script>
swal({
            title: 'Datos Guardados Con Exito!',
            text: '',
            type: 'info',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar',
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
              setTimeout(function(){
						location.href="control_rece.php";
					},2000);
            } 
        });
</script>
       <?php 
     }

     else{
      echo "error";
    }

  
}}
/*TERMINA BOTON IMPRIMIR*/
?>
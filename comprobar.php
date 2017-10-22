<?php
header('Content-type: application/json; charset=utf-8');
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  require_once 'encriptacion.php';
  require_once '../assets/php/conexion.php';
  $us=$_POST['us'];
  $pass_user=$_POST['pass'];

	$pass_hash = encriptar::encrypt($pass_user);
	//echo $pass_hash; //CONTRASEÑA 123 -- hRJV5b5DRyPcYRYcrKDrm+76xF4EoXBhFCyh1Cb9OJM=
  //echo $pass_hash;
	//$p_login = new login();
	//$datos = $p_login->valida_usuario($usuario,$pass_hash);
	//echo $datos['hacer'];
  $str="SELECT id_usuario, estado_usuario FROM tbl_usuario WHERE usuario='$us' AND contrasena='$pass_hash'";
  $array = mysqli_query($mysqli, $str);
  $array = mysqli_fetch_assoc($array);
  $estado_usuario = $array['estado_usuario'];
  $id_usuario = $array['id_usuario'];
  if (isset($id_usuario)) { // US y PASS correcto
    //echo $id_usuario;
    switch ($estado_usuario) {
      case 'Activo':
      $array_resultados['color_alerta'] = 'alert-success';
      $array_resultados['msg'] = 'BIENVENIDO ';
      $array_resultados['url'] = 'http://localhost:8080/bernardo';
      $array_resultados['redirecciona'] = 'si';
      // redirecciona

      echo json_encode($array_resultados);
      //echo "Activo";

        break;
      case 'Inactivo':
      $array_resultados['color_alerta'] = 'alert-info';
      $array_resultados['msg'] = 'USUARIO INCORRECTO';
      echo json_encode($array_resultados);

          break;
      case 'Bloqueado':
      $array_resultados['color_alerta'] = 'alert-danger';
      $array_resultados['msg'] = 'USUARIO BLOQUEADO';
      echo json_encode($array_resultados);

        break;
      default:
        # code...
        break;
    }
  }else { // SOLO EXISTE USUARIO
    $str="SELECT id_usuario,intentos,estado_usuario,(SELECT descripcion FROM tbl_parametros WHERE id_parametro='8')  AS intentos_param FROM tbl_usuario WHERE usuario='$us' ";
    $array = mysqli_query($mysqli, $str);
    $array = mysqli_fetch_assoc($array);
    $id_usuario = $array['id_usuario'];
    if (isset($id_usuario)) {
        $estado_usuario = $array['estado_usuario'];
        if ($estado_usuario=="Activo") {
          $intentos = $array['intentos'];
          $str="UPDATE tbl_usuario SET intentos=$intentos+1 WHERE usuario='$us'";
          $array2 = mysqli_query($mysqli, $str);
          $intentos_param = $array['intentos_param'];
          //$a= $intentos_param-($intentos+1); // 3-0
          if ( ($intentos_param-($intentos+1)) ) {
            $array_resultados['color_alerta'] = 'alert-info';
            $array_resultados['msg'] = "A FALLADO LE QUEDAN ". ( $intentos_param-($intentos+1) )." INTENTOS";
            echo json_encode($array_resultados);
            //echo "A FALLADO LE QUEDAN ". ( $intentos_param-($intentos+1) )." INTENTOS";
            # code...
          }else {
            $array_resultados['color_alerta'] = 'alert-danger';
            $array_resultados['msg'] = $us." HA SIDO BLOQUEADO";
            echo json_encode($array_resultados);
            $str="UPDATE tbl_usuario SET intentos=0, estado_usuario='Bloqueado' WHERE usuario='$us'";
            $array2 = mysqli_query($mysqli, $str);
          }
          //echo $intento_param;
        }

    }else {
      $array_resultados['color_alerta'] = 'alert-success';
      $array_resultados['msg'] = "USUARIO O CONTRASEÑA INCORRECTA";
      echo json_encode($array_resultados);
    }
  }


}else {
  header('Location: http://localhost:8080/bernardo');
}
 ?>

<?php
session_start();
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	/* Connect To Database*/
require '../funcs/funcs.php';
require '../funcs/conexion.php';
	//Contiene funcion que conecta a la base de datos
	if(($_SESSION['id_usuario']) == ""){
    header ("Location: index.php");
}
$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$id_parametro=intval($_GET['id']);
		$query=mysqli_query($mysqli,"select * from tbl_parametros where id_parametro='".$id_parametro."'");
        $co=("DELETE FROM tbl_parametros WHERE id_parametro='".$id_parametro."'");
        $res=mysqli_query($mysqli,$co);
				
		$count=mysqli_num_rows($query);
		$objeto="tbl_parametros";
                     $us="probando";
                    $accion="DELETE";
         $bita=grabarBitacora($idUsuario,$objeto,$accion,$co);
                    
             
            
             
			if ($res){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados Exitosamente.
			</div>
			
			
			
			<?php 
				
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
			
		}
			
		
		
		
	}

	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($mysqli,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('Nombre','Descripcion');//Columnas de busqueda
		 $sTable = "tbl_parametros";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by id_parametro desc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; //how much records you want to show
		$adjacents  = 5; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './parametros.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($mysqli, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="success">
					<th>ID</th>
					<th>Nombre</th>
					<th>Valor</th>
		
					<th><span class="pull-right">Acciones</span></th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id_parametro=$row['id_parametro'];
						$nombre=$row['nombre'];
						$descripcion=$row['descripcion'];
				
					
					?>
					
					<input type="hidden" value="<?php echo $row['nombre'];?>" id="nombre<?php echo $id_parametro;?>">
					<input type="hidden" value="<?php echo $row['descripcion'];?>" id="descripcion<?php echo $id_parametro;?>">
					<input type="hidden" value="<?php echo $id_parametro;?>" id="id_parametro<?php echo $id_parametro;?>">
			
					<tr>
						<td><?php echo $id_parametro; ?></td>
						<td><?php echo $nombre; ?></td>
						<td ><?php echo $descripcion; ?></td>
				
				
						
					
	
						
					<td ><span class="pull-right">
					<a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal2" onclick="obtener_datos('<?php echo $row['id_parametro']?>');" ><i class="glyphicon glyphicon-edit"></i></a> 
					
					
	
					
				
					
					
					
					
					<a href="#" class='btn btn-default' title='Borrar parametro' onclick="eliminar('<?php echo $row['id_parametro']?>')"><i class="glyphicon glyphicon-trash"></i> </a></span></td>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=9><span class="pull-right">
					<?php
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>
<?php  require '../funcs/conexion.php'; ?>
     <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">


     <div class="container">



      



     <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
             <th >No.</th>
                <th >Codigo de Transación</th>
                <th>Fecha</th>
                <th>Codigo</th>
                <th>Medicamento</th>
				<th >Tipo</th>
                <th >Cant.</th>
                <th>Unidad</th>
                  <th>stock</th>
                <th>opciones</th>
          </tr>
        </thead>
        <tbody>




            <?php






			 $sql = "SELECT a.tipo_transaccion,a.no,a.id_proveedor, a.codigo_transaccion,a.fecha,a.codigo,a.stock,a.numero,b.codigo_producto,b.nombre_producto,b.unidad FROM transaccion_medicamentos as a INNER JOIN products as b ON a.codigo=b.codigo_producto ORDER BY codigo_transaccion DESC";

			$query = mysqli_query($mysqli, $sql);


			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM transaccion_medicamentos");
		$row1= mysqli_fetch_array($count_query);

			$numrows = $row1['numrows'];


          if ($numrows>0){

        while ($row=mysqli_fetch_array($query)){



                         $num=$row['no'];
			             $cod_tra=$row['codigo_transaccion'];
             $fecha=$row['fecha'];
                         $codigo=$row['codigo'];
                         $nombre=$row['nombre_producto'];
				         $tipo=$row['tipo_transaccion'];
                        $cant=$row['numero'];
                         $uni=$row['unidad'];
                        $pro=$row['id_proveedor'];
                         $stock=$row['stock'];
          ?>



              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $cod_tra; ?></td>
                <td><?php echo $fecha;?></td>
                <td><?php echo $codigo;?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $tipo;?></td>  
                  <td><?php echo $cant;?></td>
                  <td><?php echo $uni;?></td>
                          <td><?php echo $stock;?></td>



                <td>



                
                  
                  <a href="#" class='btn btn-default' title='Eliminar Compra'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $num;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 



                 









                </td>
              </tr>
          <?php

           }
          }else{

          ?>
          <tr>
            <td colspan="4">No se encontraron resultados</td>
          </tr>
          <?php
          }
          ?>




        </tbody>
      </table>

      </div>

      </div>


   <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
    


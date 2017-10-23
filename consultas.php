<?php

session_start();

require 'funcs/conexion.php';


require 'funcs/funcs.php';

$nombre=getNum();

?>

<!DOCTYPE html>
<head>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>


<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/toastr.min.js" ></script

 		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
    
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	     <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> 
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	  
	  <script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
    
      <script type="text/javascript">
    function showCo() {
        element = document.getElementById("co");
        check = document.getElementById("che");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
    
    
    <script type="text/javascript">
    function showCon() {
        element = document.getElementById("con");
        check = document.getElementById("chec");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>

</head>
<?php include("menu.php"); ?>
<body>
 	<div class="about-heading">	
			<div class="con">
                CONSULTA
			
		</div>
	</div>  
  <div class='container'>
    <div class='panel panel-danger dialog-panel'>
      <div class='panel-heading'>
        <h5>Anamnesis</h5>
      </div>
      <div class='panel-body'>
     	<form method="post" id="loginform" name="consultas" class="form-horizontal" role="form"  autocomplete="off">
					            
            
           <input type="hidden" id="mod_id" name="mod_id" value="<?php echo $nombre;?>">
			                     <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Mascota</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <select  class="myselect" style="text-transform: uppercase;" id="masco" name="masco"  style="width:80%">
                <?php 
				$query_cod_veh=mysqli_query($mysqli,"SELECT id_mascota,nom_mascota from tbl_mascotas");
				while($rw=mysqli_fetch_array($query_cod_veh))	{
					?>
                    
				<option value="<?php echo $rw['id_mascota'];?>"><?php echo $rw['nom_mascota'];?></option>			
					<?php
				}

				?>
			
                </select>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='fecha'  style="text-transform: uppercase;" name='fecha' placeholder='' type='date'>
                </div>
              </div>
           
            </div>
          </div>
            
            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									
								</div>
			                 
                 <div>
            <br>
             
            </div>
                
                   <b>Servicios</b>
<input type="checkbox" name="che" id="che" value="1" onchange="javascript:showCo()" />
<div id="co" style="display: none;">
                <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Motivo de Consulta</label>
            <div class='col-md-6'>
              <textarea class='form-control' onkeyup="return unespaciomotivo()" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="30" id='motivo' name="motivo" placeholder='' rows='3'></textarea>
            </div>
          </div>  
                    
                    			  <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
 <script type="text/javascript">
	function unespaciomotivo(){
		orig=document.consultas.motivo.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.motivo.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(motivo.value.match(/\s\s/)) motivo.value = motivo.value.replace('  ', ' ');
}
</script>	

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Sintomas Notados y Duración</label>
            <div class='col-md-6'>
              <textarea class='form-control' onkeyup="return unespaciosintomas()" id='sintomas' onkeypress="return soloLetras(event)" name='sintomas' style="text-transform: uppercase;" maxlength="30" placeholder='' rows='3'></textarea>
            </div>
          </div>
 <script type="text/javascript">
	function unespaciosintomas(){
		orig=document.consultas.sintomas.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.sintomas.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
function unosolo() {
	while(sintomas.value.match(/\s\s/)) sintomas.value = sintomas.value.replace('  ', ' ');
}
</script>
               
               
                
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Tratamientos Previos y Respuesta</label>
            <div class='col-md-6'>
           <textarea class='form-control' id='tratamientos' style="text-transform: uppercase;" onkeyup="return unespaciotratamiento()" onkeypress="return soloLetras(event)" maxlength="30" name="tratamientos" placeholder='' rows='3'></textarea>
            </div>
          </div>
  <script type="text/javascript">
	function unespaciotratamiento(){
		orig=document.consultas.tratamientos.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.tratamientos.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(tratamientos.value.match(/\s\s/)) tratamientos.value = tratamientos.value.replace('  ', ' ');
}
</script>
               
               
                
              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Dieta Suministrada y Consumo</label>
            <div class='col-md-6'>
              <textarea class='form-control' onkeyup="return unespaciodieta()" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="30" id='dieta' name='dieta'placeholder='' rows='3'></textarea>
            </div>
          </div> 
                           
  <script type="text/javascript">
	function unespaciodieta(){
		orig=document.consultas.dieta.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.dieta.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(dieta.value.match(/\s\s/)) dieta.value = dieta.value.replace('  ', ' ');
}
</script>   
			                   
            </div>
                             
                
             <div>
            <br>
                <br>
            </div>
            
<!-------------------------------------------------------------------------------------------------------------->            

 <b>Examen Clinico</b>
<input type="checkbox" name="chec" id="chec" value="1" onchange="javascript:showCon()" />
<div id="con" style="display: none;" style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
        
                 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
              <div class='col-md-2'>
        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' maxlength="30" style="text-transform: uppercase;" id='peso' name='peso' placeholder='Peso' onkeyup="return unespaciopeso()" type='text'>
                </div>
              </div>
               
                 <script type="text/javascript">
	function unespaciopeso(){
		orig=document.consultas.peso.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.peso.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(peso.value.match(/\s\s/)) peso.value = peso.value.replace('  ', ' ');
}
</script>
               
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='TLLC' onkeyup="return unespacioTLLC()" maxlength="30" style="text-transform: uppercase;" name="TLLC" placeholder='TLLC' type='text'>
                </div>
              </div>
              
                <script type="text/javascript">
	function unespacioTLLC(){
		orig=document.consultas.TLLC.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.TLLC.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(TLLC.value.match(/\s\s/)) TLLC.value = TLLC.value.replace('  ', ' ');
}
</script>
              
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='temperatura' maxlength="30" style="text-transform: uppercase;" name='temperatura' onkeyup="return unespaciotempe()" placeholder='Temperatura' type='text'>
                </div>
              </div>
            </div>
          </div>
                 <script type="text/javascript">
	function unespaciotempe(){
		orig=document.consultas.temperatura.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.temperatura.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(temperatura.value.match(/\s\s/)) temperatura.value = temperatura.value.replace('  ', ' ');
}
</script>
               
               
                
              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
              <div class='col-md-2'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='frc' onkeyup="return unespaciofrc()" maxlength="30" style="text-transform: uppercase;" name='frc' placeholder='FC' type='text'>
                </div>
              </div>
                 <script type="text/javascript">
	function unespaciofrc(){
		orig=document.consultas.frc.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.frc.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(frc.value.match(/\s\s/)) frc.value = frc.value.replace('  ', ' ');
}
</script>
               
               
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='fr' onkeyup="return unespaciofr()" name='fr' maxlength="30" style="text-transform: uppercase;" placeholder='FR' type='text'>
                </div>
              </div>
                <script type="text/javascript">
	function unespaciofr(){
		orig=document.consultas.fr.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.fr.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(fr.value.match(/\s\s/)) fr.value = fr.value.replace('  ', ' ');
}
</script>
              
              
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='act'name='act' onkeyup="return unespacioact()" maxlength="30" style="text-transform: uppercase;" placeholder='Actitud' type='text'>
                </div>
              </div>
            </div>
          </div>   
          
             <script type="text/javascript">
	function unespacioact(){
		orig=document.consultas.act.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.act.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(act.value.match(/\s\s/)) act.value = act.value.replace('  ', ' ');
}
</script>
             
      <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
            <div class='col-md-2'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' onkeyup="return unespaciocondi()" id='condi' maxlength="30" style="text-transform: uppercase;" name='condi' placeholder='Condición ' type='text'>
                </div>
              </div>
               
                 <script type="text/javascript">
	function unespaciocondi(){
		orig=document.consultas.condi.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.condi.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(condi.value.match(/\s\s/)) condi.value = condi.value.replace('  ', ' ');
}
</script>
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='membra' maxlength="30" style="text-transform: uppercase;"  name='membra'placeholder='Membrana Mucosas' onkeyup="return unespaciomembra()" type='text'>
                </div>
              </div>
               
                 <script type="text/javascript">
	function unespaciomembra(){
		orig=document.consultas.membra.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.membra.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(membra.value.match(/\s\s/)) membra.value = membra.value.replace('  ', ' ');
}
</script>
                
                <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='hn'name='hn' maxlength="30" style="text-transform: uppercase;" placeholder='Hidratación' onkeyup="return unespaciohn()" type='text'>
                </div>
              </div> 
              
  <script type="text/javascript">
	function unespaciohn(){
		orig=document.consultas.hn.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.hn.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(hn.value.match(/\s\s/)) hn.value = hn.value.replace('  ', ' ');
}
</script>

              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
            <div class='col-md-5'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='patron' maxlength="30" style="text-transform: uppercase;" name='patron' onkeyup="return unespaciopatron()" placeholder='Patrón Respiratorio' type='text'>
                </div>
              </div>
                <script type="text/javascript">
	function unespaciopatron(){
		orig=document.consultas.patron.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.patron.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(patron.value.match(/\s\s/)) patron.value = patron.value.replace('  ', ' ');
}
</script>
              
 
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='estado' maxlength="30" style="text-transform: uppercase;" name='estado'placeholder='Temperamento' onkeyup="return unespacioestado()" type='text'>
                </div>
              </div>       
        </div>
          </div>
          </div>
          </div>
                           
  <script type="text/javascript">
	function unespacioestado(){
		orig=document.consultas.estado.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.consultas.estado.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}
	
      function unosolo() {
	while(estado.value.match(/\s\s/)) estado.value = estado.value.replace('  ', ' ');
}
</script>                           

			                   
          </div>
                
                
<br>
            <br>
            <div>
            <br>
                <br>
            </div>
         
	                <div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									
			                   
								</div>
							</div>
						</div>   
						
             <div class="btn-group pull-right">
				<button type='button' class="btn btn-danger" data-toggle="modal"  onclick="obtener_id()" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
			</div>
          	<div id="resultados">
                   <b>Examen Clinico</b>
                </div><!-- Carga los datos ajax -->
				<div class='outer_div'></div>
              <div class="form-group">
							<div class="col-md-12 control">
								
							</div>
						</div> 
            <br>
            <br>
             <div class="form-group">
			                        <div class="col-md-9 col-md-offset-5">
			                            <button type="submit" class="btn btn-danger">
			                                registrar consulta
			                            </button>

			                           
			                        </div>
			                    </div>
            	</form>
        </div>
      </div>
    </div>
         
</body>


<?php
				
				
			include("modal/registro_usuarios.php");
			include("modal/editar_usuarios.php");
				require 'modal/eliminar_usuario.php';

	

		  
			?>
<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
<script type="text/javascript">
	
    
    
     $(document).on('submit', '#loginform', function(event) {
		event.preventDefault();
		$.ajax({
			url: 'funcs/consulta.php',
			type: 'POST',
			dataType: 'JSON',
			data: $(this).serialize(),
			success:function(data){
	
				toastr.options.timeOut = 2000;
				// toastr.options.showMethod = 'fadeIn';
				// toastr.options.hideMethod = 'fadeOut';
				// toastr.options.positionClass = 'toast-top-center';
				
				if(data=="ok"){
					toastr.info("Consulta registrada con exito");
					setTimeout(function(){
						location.href="recetas.php";
					},2000);
				}
			
				else{
					toastr.error(data);
				}
			}
		})
	});

    
    
    
    
		$(".myselect").select2();
		
    	 	  function obtener_id(){
		
var hasta = $('#mod_id').val();
var desde=$('#masco').val();
			$("#nom").val(hasta);
	        $("#mas").val(desde);
	      
 }
       
   
    
    
    
    

  	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_parametro.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
				load(1);
			
		  }
		 
	});
  event.preventDefault();
})
	
	  
    
   
    
    
  
	 	$(document).ready(function(){
			load(1);
		});

		function load(page){
            var hasta = $('#mod_id').val();	
		
			$("#loader").fadeIn('slow');
			$.ajax({
                type:'POST',
				url:'ajax/atencion_ajax.php',
                data:'hasta='+hasta,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}  
    
    
    
    
    
    
    
    
    
    
     
    
    
    
    
    
    
   
          
    
	</script>		
        
        
        
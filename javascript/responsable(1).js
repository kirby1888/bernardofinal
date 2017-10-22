  function responsable_seleccionado(nombres, apellidos, paciente, parentesco, tipoidentificacion, identifi, profesion, direccion, correo, tel, tel2, tel3, id_oculto_responabl,id_oculto_pacient){

  document.getElementById('txt_nombres').value = nombres; 
  document.getElementById('txt_apellidos').value = apellidos;
  document.getElementById('txt_paciente').value = paciente;
  document.getElementById('combo_parentesco').value = parentesco;
  document.getElementById('combo_identificacion').value = tipoidentificacion;
  document.getElementById('txt_identificacion').value = identifi;
  document.getElementById('combo_profesion').value = profesion;
  document.getElementById('txt_direccion').value = direccion;
  document.getElementById('txt_correo').value = correo;
  document.getElementById('txt_telefono1').value = tel;
  document.getElementById('txt_telefono2').value = tel2;
  document.getElementById('txt_telefono3').value = tel3;  
  document.getElementById('id_oculto_responsable').value = id_oculto_responabl;
  document.getElementById('id_oculto_paciente').value = id_oculto_pacient;
  document.getElementById('txt_identificacion').readOnly = false;
  
}

function mayusculasresponsable() {
    var x = document.getElementById("txt_nombres");
    var a = document.getElementById("txt_apellidos");
    x.value = x.value.toUpperCase();
    a.value = a.value.toUpperCase();
}


function tipo_identificacion (){
  var a = document.getElementById("combo_identificacion");
  var h = document.getElementById("txt_identificacion");
    document.getElementById('txt_identificacion').readOnly = false;

      if ( document.getElementById("combo_identificacion").selectedIndex == "1") {
     

   document.getElementById("txt_identificacion").maxLength = "13";
    $(document).on('keypress', '#txt_identificacion', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;  

    }
});
 

      }
      else if (document.getElementById("combo_identificacion").selectedIndex == "2" ){
      


$(document).on('keypress', '#txt_identificacion', function (event) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false; 

    }
});


      }
      else{
        

$(document).on('keypress', '#txt_identificacion', function (event) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;

       
    }
});


      };

}
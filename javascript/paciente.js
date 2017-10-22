function paciente_seleccionada(sexo, tel3, te2, tel, nombre1, nombre2, apellido1, apellido2, edads, tident, ident, estado, profesion, paiss, deptos, municip, direccion, correo,id, foto,paciente){
  document.getElementById('txt_identificacion').readOnly = false;
  if  (sexo == "femenino" )  {

    document.getElementById('sexo2').checked = true;
  }
  else if (sexo == "masculino") {
    document.getElementById('sexos').checked = true;
  };

  foto_paciente = foto;
  document.getElementById('txt_telefono1').value = tel;
  document.getElementById('txt_telefono2').value = te2;
  document.getElementById('txt_telefono3').value = tel3;
  document.getElementById('txt_primernombre').value = nombre1;
  document.getElementById('txt_segundonombre').value = nombre2;
  document.getElementById('txt_primerapellido').value = apellido1;
  document.getElementById('txt_segundoapellido').value = apellido2;
  document.getElementById('txt_edad').value = edads;
  document.getElementById('combo_identificacion').value = tident;
  document.getElementById('txt_identificacion').value = ident;
  document.getElementById('combo_estado_civil').value = estado;
  document.getElementById('combo_profesion').value = profesion;
  document.getElementById('pais').value = paiss;
  document.getElementById('depto').value = deptos;
  document.getElementById('municipio').value = municip;
  document.getElementById('txt_direccion').value = direccion;
  document.getElementById('txt_correo').value = correo;
  document.getElementById('id_oculto').value = id;
  document.getElementById('id_btn_seleccionar').value = paciente;
  document.getElementById('preview').images = foto;
  document.getElementById("id_btn_seleccionar").click();

  /*alert(foto_paciente);*/
  var preview = document.getElementById('preview');
  preview.setAttribute('src', foto_paciente);
}

function previewImage(input) {
  var preview = document.getElementById('preview');
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      preview.setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  } else {
    preview.setAttribute('src', 'placeholder.png');
  }
}



function tipo_identificacion (){

  document.getElementById('txt_identificacion').readOnly = false; 


  if ( document.getElementById("combo_identificacion").selectedIndex == "1") {

    document.getElementById("txt_identificacion").maxLength = "13";
    document.getElementById("txt_identificacion").value = "";
    $(document).on('keypress', '#txt_identificacion', function (event) {
      var regex1 = new RegExp("^[0-9]+$");
      var key1 = String.fromCharCode(!event.charCode ? event.which : event.charCode);
      if (!regex1.test(key1)) {
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
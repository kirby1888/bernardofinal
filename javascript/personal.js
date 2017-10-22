function personal_seleccionada(sexo, especialidad, tel3, tel2, tel, nombre1, nombre2, apellidos1, apellidos2, edads, tipident, ident, tpers, paiss, depart, munic, direccion, correo, id, foto ){
document.getElementById('txt_identificacion').readOnly = false;
if  (sexo == "femenino" )  {

document.getElementById('sexo2').checked = true;
}
else if (sexo == "masculino") {
  document.getElementById('sexos').checked = true;
};

document.getElementById('combo_especialidad').value = especialidad;
document.getElementById('txt_telefono3').value = tel3;
document.getElementById('txt_telefono2').value = tel2;
document.getElementById('txt_telefono1').value = tel;
document.getElementById('txt_primernombre').value = nombre1;
document.getElementById('txt_segundonombre').value = nombre2;
document.getElementById('txt_primerapellido').value = apellidos1;
document.getElementById('txt_segundoapellido').value = apellidos2;
document.getElementById('txt_edad').value = edads;
document.getElementById('combo_identificacion').value = tipident;
document.getElementById('txt_identificacion').value = ident;
document.getElementById('combo_tipo').value = tpers;
document.getElementById('pais').value = paiss;
document.getElementById('depto').value = depart;
document.getElementById('municipio').value = munic;
document.getElementById('txt_direccion').value = direccion;
document.getElementById('txt_correo').value = correo;
document.getElementById('id_oculto').value = id;

foto_personal = foto;
/*alert(foto_personal);*/
 var preview = document.getElementById('preview');
 preview.setAttribute('src', foto_personal);
}


function previewImage(input) { /*VER LA IMAGEN CUANDO PRESIONAMOS SELECCIONAR ARCHIVO*/
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
  var a = document.getElementById("combo_identificacion");
  var h = document.getElementById("txt_identificacion");
  document.frm.txt_identificacion.readOnly = false;
  document.getElementById('txt_identificacion').readOnly = false; 


      if ( document.getElementById("combo_identificacion").selectedIndex == "1") {
   h.value = '';
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
      
 h.value = '';

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
        
h.value = '';

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
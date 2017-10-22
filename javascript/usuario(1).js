function usuario_seleccionado(estado, rol, nick, id, nombre, foto){

foto_usuario = foto;
document.getElementById('combo_estado').value = estado;
document.getElementById('combo_roles').value = rol;
document.getElementById('txt_usuario').value = nick;
document.getElementById('id_oculto').value = id;
document.getElementById('txt_nombre').value = nombre;

/*alert(foto_usuario);*/
 var preview = document.getElementById('preview');
 preview.setAttribute('src', foto_usuario);

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

function estado(){

document.frm.combo_estado.disabled = false;
  }  
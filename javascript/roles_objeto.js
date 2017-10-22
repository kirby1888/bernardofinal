function usuario_seleccionado(rol,nick,id,foto){

id_usuario = id;
nickname = nick;
id_rol = rol;


document.getElementById('combo_roles').value = rol;
document.getElementById('txt_usuario').value = nickname;
document.getElementById('id_oculto').value = id_usuario;

}    
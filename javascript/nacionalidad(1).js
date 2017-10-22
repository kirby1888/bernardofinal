function nacionalidad_seleccionada(descripcion_nacionalidad,id){

id_nacionalidad = id;
des_nac = descripcion_nacionalidad;

document.getElementById('txt_nacionalidad').value = des_nac;
document.getElementById('id_oculto').value = id_nacionalidad;


}

function especialidad_seleccionada(descripcion_especialidad,id){

id_especialidad = id;
des_especialidad = descripcion_especialidad;

document.getElementById('txt_especialidad').value = des_especialidad;
document.getElementById('id_oculto').value = id_especialidad;


}
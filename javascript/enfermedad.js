function enfermedad_seleccionada(descripcion_enfermedad,id){

id_enfermedad = id;
des_enfer = descripcion_enfermedad;

document.getElementById('text_enfermedad').value = des_enfer;
document.getElementById('id_oculto').value = id_enfermedad;


}
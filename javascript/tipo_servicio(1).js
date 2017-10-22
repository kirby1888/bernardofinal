function servicio_seleccionado(descripcion_servicio,id){

id_servicio = id;
des_serv = descripcion_servicio;

document.getElementById('text_servicio').value = des_serv;
document.getElementById('id_oculto').value = id_servicio;


}
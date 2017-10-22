function identificacion_seleccionada(descripcion_identificacion,id){

id_identificacion = id;
des_iden = descripcion_identificacion;

document.getElementById('txt_identificacion').value = des_iden;
document.getElementById('id_oculto').value = id_identificacion;


}
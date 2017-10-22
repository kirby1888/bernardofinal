function radiografia_seleccionada(descripcion_radiografia,id){

id_radiografia = id;
des_radiografia = descripcion_radiografia;

document.getElementById('txt_radiografia').value = des_radiografia;
document.getElementById('id_oculto').value = id_radiografia;


}
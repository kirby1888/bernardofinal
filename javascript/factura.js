function factura_seleccionada(descripcion_factura,id){

id_Factura = id;
des_fac = descripcion_factura;

document.getElementById('txt_factura').value = des_fac;
document.getElementById('id_oculto').value = id_Factura;


}


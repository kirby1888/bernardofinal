  function ortodoncia(id, descripcion, precio, costo_adicional, detalle_costo){

document.getElementById('id_oculto').value = id;
document.getElementById('txt_descripcion').value = descripcion;
document.getElementById('txt_costo_diente').value = precio;
document.getElementById('txt_costo_adicional').value = costo_adicional;
document.getElementById('txt_detalle_costo_adicional').value = detalle_costo;

}

function tejidos_blandos(id, tratamiento, examen_tejido_blando, costo){

document.getElementById('id_oculto').value = id;
document.getElementById('txt_tratamiento_bucal').value = tratamiento;
document.getElementById('txt_tejido_blandos').value = examen_tejido_blando;
document.getElementById('txt_costo_bucal_completo').value = costo;

}

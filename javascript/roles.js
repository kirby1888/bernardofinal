
function rol_seleccionado(descripcion,rol,id){

id_rol = id;
rol = rol;
descripcion = descripcion;

document.getElementById('txt_descripcion').value = descripcion;
document.getElementById('txt_rol').value = rol;
document.getElementById('id_oculto').value = id_rol;

}    
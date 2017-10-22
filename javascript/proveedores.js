function proveedores_seleccionada(direccion,correo,telefono,nombre,id){

id_p = id;
nom = nombre;
tel = telefono;
cor = correo;
dir = direccion;


document.getElementById('id_oculto').value = id_p;
document.getElementById('txt_nproveedor').value = nom;
document.getElementById('txt_tproveedor').value = tel;
document.getElementById('txt_cproveedor').value = cor;
document.getElementById('txt_dproveedor').value = dir;


}






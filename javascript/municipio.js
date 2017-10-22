function municipio_seleccionada(departamentos,  municipios,  id){

id_especialidad = id;
town = municipios;
departament = departamentos;


document.getElementById('txt_municipio').value = town;
document.getElementById('txt_depto').value = departament;
document.getElementById('id_oculto').value = id_especialidad;


}
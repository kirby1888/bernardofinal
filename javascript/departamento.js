function departamento_seleccionada( departamentos,pais, id){

id_especialidad = id;
country = pais;
departament = departamentos


document.getElementById('txt_pais').value = country;
document.getElementById('txt_depto').value = departament;
document.getElementById('id_oculto').value = id_especialidad;


}
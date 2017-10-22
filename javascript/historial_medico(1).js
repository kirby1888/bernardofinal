function historial_seleccionado(id_paciente,id_diagnostico){

document.getElementById('id_oculto').value = id_paciente;
document.getElementById('id_oculto_diagnostico').value = id_diagnostico;

document.getElementById("id_btn_seleccionar").click();
}
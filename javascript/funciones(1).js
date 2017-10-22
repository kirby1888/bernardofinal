
function cerrar_session(){

swal({
            title: '¿Está Seguro de Cerrar Sesion? ',
            type: 'warning',
            cancelButtonColor: '#654',
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Si',
            showCancelButton: true,
			
        },
        function(isConfirm) {
            if (isConfirm) {
             window.location = 'cerrar_sesion.php'; 
            } 
        });
}


function acceso_denegado(){
    alert('Acceso Denegado, Necesita iniciar Sesion');
    window.location =  "./index.php"
}

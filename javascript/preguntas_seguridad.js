function verificar_preguntas1(){
    seleccion_1 = document.getElementById('pregunta1').value;
    seleccion_2 = document.getElementById('pregunta2').value;
    seleccion_3 = document.getElementById('pregunta3').value;

    if (seleccion_1 == seleccion_2) {
      swal({
        title: 'Esta Pregunta ya fue Seleccionada',
        text: '',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
        } 
    });
      
      document.getElementById('pregunta1').getElementsByTagName('option')[0].selected = 'selected'
  };


  if (seleccion_1 == seleccion_3) {
      swal({
        title: 'Esta Pregunta ya fue Seleccionada',
        text: '',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
        } 
    }); 
      document.getElementById('pregunta1').getElementsByTagName('option')[0].selected = 'selected'
  };


}


function verificar_preguntas2(){
    seleccion_1 = document.getElementById('pregunta1').value;
    seleccion_2 = document.getElementById('pregunta2').value;
    seleccion_3 = document.getElementById('pregunta3').value;

    if (seleccion_1 == seleccion_2) {
        swal({
            title: 'Esta Pregunta ya fue Seleccionada',
            text: '',
            type: 'warning',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar',
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
            } 
        });
        document.getElementById('pregunta2').getElementsByTagName('option')[1].selected = 'selected'
    };

    if (seleccion_2 == seleccion_3) {
      swal({
        title: 'Esta Pregunta ya fue Seleccionada',
        text: '',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
        } 
    });
      document.getElementById('pregunta2').getElementsByTagName('option')[1].selected = 'selected'
  };

}



function verificar_preguntas3(){
    seleccion_1 = document.getElementById('pregunta1').value;
    seleccion_2 = document.getElementById('pregunta2').value;
    seleccion_3 = document.getElementById('pregunta3').value;

    if (seleccion_2 == seleccion_3) {
       swal({
        title: 'Esta Pregunta ya fue Seleccionada',
        text: '',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
        } 
    }); 
       document.getElementById('pregunta3').getElementsByTagName('option')[2].selected = 'selected'
   };

   if (seleccion_1 == seleccion_3) {
      swal({
        title: 'Esta Pregunta ya fue Seleccionada',
        text: '',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
        } 
    });
      document.getElementById('pregunta3').getElementsByTagName('option')[2].selected = 'selected' 
  };


}
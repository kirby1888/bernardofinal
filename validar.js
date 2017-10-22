        
    function validar(){
    var correo, expresion;
      correo = document.getElementById("correo").value;    
      expresion= /\w+@\w+\.+[a-z]/;
            
       if(correo.length > 80){
       alert('El campo correo excede su capacidad de caracteres');
            }
     else if(!expresion.test(correo)){
         alert('El correo no es valido');
         return false;
     }
    }
       
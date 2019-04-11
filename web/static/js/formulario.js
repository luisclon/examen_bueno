var letras= /^([a-zA-Z ñáéíóú]{3,25})$/i;
function validar(){
    var nombre=$("#nombre").val(),
        contraseña=$("#contraseña").val();
        
    if( nombre=="" ){
        document.formulario.nombre.focus();
      $("#mensaje1").fadeIn();
      return false;
            }else if( nombre.length < 3){
            $("#mensaje1").fadeOut();
            $("#mensaje2").fadeIn();
            return false;
                }else if( !letras.test(nombre)){
                $("#mensaje2").fadeOut();
                $("#mensaje3").fadeIn();
                return false;
        
    }
   
    if( contraseña == "" ){
        document.formulario.nombre.focus();
      $("#mensaje7").fadeIn();
      return false;
            }else if( contraseña.length < 8){
            $("#mensaje7").fadeOut();
            $("#mensaje8").fadeIn();
            return false;
                }
                else{
                    document.formulario.submit();
                    $("#mensaje8").fadeOut();
                    
                }  
                
    }
    function checamensaje(valor){
        var dato=valor;
        
        if(dato !=""){
            $("#mensaje1").fadeOut();
        }
        if(dato.length >= 3){
            $("#mensaje2").fadeOut();
        }
        if(letras.test(dato)){
            $("#mensaje3").fadeOut();
        }
    }

    function checamensaje3(valor){
        var dato=valor;
        
        if(dato !=""){
            $("#mensaje7").fadeOut();
        }
        if(dato.length >= 8){
            $("#mensaje8").fadeOut();
        }
    }
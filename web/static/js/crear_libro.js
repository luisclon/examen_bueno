$(document).ready(function(){
    $("#alta_libro").submit(function(event){
    event.preventDefault();
    var url = form_url;
    var nombre = $("#nombre").val();
    var autor = $("#autor").val();
    var editorial = $("#editorial").val();
    var paginas = $("#paginas").val();
    var existencia = $("#existencia").val();
    var descripcion = $("#descripcion").val();
    var archivo = $("#archivo")[0].files[0];
    var data = new FormData();
    data.append('Nombre',nombre);
    data.append('Autor',autor);
    data.append('Editorial',editorial);
    data.append('Numero_de_paginas',paginas);
    data.append('existencia',existencia);
    data.append('descripcion',descripcion);
    data.append('pdf',archivo);

    $.ajax({                        
        type: "POST",                 
        url: url,                     
        data: data,
        success: function(data){
            console.log(data);           
        },
        error:function(request,status,err){
            console.log(request.responseJSON);
        },

        cache:false,
        contentType:false,
        processData:false
               });
});
});
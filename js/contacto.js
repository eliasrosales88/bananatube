function peticionPost() {
    console.log("Click pulsado!");
    var datoscontacto = {};
    datoscontacto.nombre = $("#nomre").val();
    datoscontacto.email = $("#email").val();
    datoscontacto.comentario = $("#comentario").val();

    console.log(datoscontacto);

    /*$.post("#url",datoscontacto,function(datos){
    console.log("success");
    $("#resultados").html(datos);
    }
    .done(function () {
    console.log("second success");
    })
    .fail(function () {
    console.log("error");
    })
    .always(function () {
    console.log("finished");
    });
     
    })*/

}



function init() {
    console.log("DOM Cargado Jquery");
    $("#boton").click(peticionPost);
}

$(document).ready(init);
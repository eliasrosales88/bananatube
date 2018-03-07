
function peticionPost(){
    console.log("Click pulsado!");
    /*var objeto = {
        
    };
    objeto.textarea=$("#comments").val();*/
     var textarea=$("#comments").val();

     
     console.log(textarea);

    /*$.post("#url",textarea,function(datos){
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



function init (){
    console.log("DOM Cargado Jquery");
    $("#boton").click(peticionPost);
}


$(document).ready(init);
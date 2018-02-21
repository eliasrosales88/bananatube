//DEFINIMOS LAS FUNCIONES QUE USAREMOS

function muestraSidebar(){
    $("#sidenav").removeAttr("hidden");
}
function escondeSidebar(){
    $("#sidenav").attr("hidden", true);
}
//---------------------------------------



//ASIGNACION DE EVENTOS CON LAS FUNCIONES DEFINIDAS
function init (){
    console.log("Header Cargado");

    $("#header_barras").click(muestraSidebar);
    $("#dark").click(escondeSidebar);
    
    //LINK DE LOGO PRINCIPAL
    $("#logo-banana").click(function(){
        window.open("http://localhost/bananatube/index.php", "_self")
    });

    //BOTONES DE NAVEGACION DEL HEADER - REGISTRO
    $("#btn_registro").click(function(){
        window.open("http://localhost/bananatube/vista_registro_unico.php", "_self")
    });
    $("#btn_registro_movil").click(function(){
        window.open("http://localhost/bananatube/vista_registro_unico.php", "_self")
    });

    //BOTONES DE NAVEGACION DEL HEADER - INICIA SESION
    $("#btn_signin").click(function(){
        window.open("http://localhost/bananatube/inicio_sesion.php", "_self")
    });
    $("#btn_signin_movil").click(function(){
        window.open("http://localhost/bananatube/inicio_sesion.php", "_self")
    });



    

}
$(document).ready(init);
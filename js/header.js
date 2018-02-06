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
    console.log("DOM Cargado");

    $("#header_barras").click(muestraSidebar);
    $("#dark").click(escondeSidebar);


}
$(document).ready(init);
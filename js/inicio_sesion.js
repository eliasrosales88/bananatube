function peticionPost(){
var objeto = {
 usuario_email:"",
 password:""
     
};
objeto.usuario_email=$("#exampleInputEmail1").val();
objeto.contraseña=$("#exampleInputPassword1").val();

 
console.log(objeto.usuario_email);
console.log(objeto.password);   
 
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
$("#acceso").click(peticionPost);
}
 
$(document).ready(init);
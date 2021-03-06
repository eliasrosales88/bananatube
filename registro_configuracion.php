<!DOCTYPE html>
<html lang="es">
<head>
  <?php include "./components/head.php";?>
  <title>BananaTube</title>
  <script src="js/registro_configuracion_modal.js"></script>
</head>
<body class="bg_main">
  <div class="container-fluid" >
      <!-- SIDEBAR -->  
      <?php include "./components/sidebar.php";?>
      <!-- CABECERA -->  
      <?php include "./components/header.php";?>    
  
      <!-- CONTENIDO -->
  <div class="row mb-4">             
    <div class="col-sm text-center">
      <h2>Configuración</h2>
    </div>        
  </div>
  <div class="row">
      
  </div>
  <div class="row">
     
   <div class="col-xl-2 col-lg-2 col-md-1"></div>
   <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1" class="col-sm text-center">Nuevo nombre de Usuario</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="col-sm text-center">Nueva contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleConfirm" class="col-sm text-center">Confirmar nueva contraseña</label>
          <input type="password" class="form-control" id="exampleConfirm" placeholder="">
        </div>
        <div class="form-check text-center">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label ml-4" for="exampleCheck1">Mostrar notificaciones</label>
        </div>  
      </form>
      <br>
      <div class="col-sm text-center">
          <button type="submit" class="btn sara">Guardar cambios</button>
      </div> 
      <br>    
      <div class="col-sm text-center">
          <button type="submit" class="btn  sara" data-toggle="modal" data-target="#modal1">Borrar cuenta</button>
      </div> 
    </div>
   <div class="col-xl-2 col-lg-2 col-md-1"></div>        
  </div> 
  <!--primer modal-->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" id="a">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de querer eliminar tu cuenta de BananaTube :( ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn sara" data-toggle="modal" data-target="#modal2" data-dismiss="modal" >Si, borrar cuenta</button>
        <button type="button" class="btn sara" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<!--segundo modal-->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modaltitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tu cuenta ha sido eliminada correctamente
      </div>
      <div class="modal-footer">
        <button type="button" class="btn sara" data-dismiss="modal" >Aceptar</button>
      </div>
    </div>
  </div>
</div>
 
  </div>
  <br>
  <?php include "./components/footer.php";?>   
</body> 
      
</html>
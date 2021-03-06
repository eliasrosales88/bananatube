<!DOCTYPE html>
<html lang="es">
<head>
  <?php include "./components/head.php";?>
  <title>BananaTube</title>
</head>
<body class="bg_main">
  <div class="container-fluid" >
      <!-- SIDEBAR -->  
      <?php include "./components/sidebar.php";?>
      <!-- CABECERA -->  
      <?php include "./components/header.php";?>
      <!-- CONTENIDO -->  
      <div class="row">             
        <div class="col-sm text-center">
          <h2>Registro</h2>
        </div>        
      </div>
      <div class="row"> 
        <div class="col-sm text-center"> 
          <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
            <strong>Upss!</strong> No hemos tenido respuesta del servidor. Por favor inténtalo de nuevo.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>  
        </div>
      </div>
    
<div class="row">
   <div class="col-xl-2 col-lg-2 col-md-1"></div>
   <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
       <form>
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm text-center">Nombre de Usuario(*)</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm text-center">Contraseña(*)</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleConfirm" class="col-sm text-center">Confirmar contraseña(*)</label>
    <input type="password" class="form-control" id="exampleConfirm" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleCorreo" class="col-sm text-center">Correo electrónico(*)</label>
    <input type="text" class="form-control" id="exampleCorreo" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleNombre" class="col-sm text-center">Nombre y apellidos(*)</label>
    <input type="text" class="form-control" id="exampleNombre" placeholder="">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Acepto términos y condiciones de uso</label>
  </div>
  <br>
</form>
<button type="submit" class="btn  sara" data-toggle="modal" data-target="#modal5">Crear cuenta</button>
       
   </div>
   <div class="col-xl-2 col-lg-2 col-md-1 "></div> 
</div>    
 <!--modal-->
 
 <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hemos mandado un correo electrónico a tu bandeja, revísala y sigue el enlace para dar de alta tu usuario y comenzar en BananaTube :).
      </div>
      <div class="modal-footer">
        <button type="button" class="btn sara" data-dismiss="modal">Continuar</button>
      </div>
    </div>
  </div>
</div>
 
  <br>
  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
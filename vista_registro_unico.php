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
        <div class="alert alert-danger" role="alert">
        por favor, rellena los campos obligatorios
        </div>
      </div>
    </div>
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Usuario(*)</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña(*)</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleConfirm">Confirmar contraseña(*)</label>
    <input type="password" class="form-control" id="exampleConfirm" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleCorreo">Correo electrónico(*)</label>
    <input type="text" class="form-control" id="exampleCorreo" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleNombre">Nombre y apellidos(*)</label>
    <input type="text" class="form-control" id="exampleNombre" placeholder="">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto términos y condiciones de uso</label>
  </div>
  <br>
  <button type="submit" class="btn  sara">Crear cuenta</button>
</form> 
  <br>

  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
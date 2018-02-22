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
      <br>
  <div class="row">             
      <div class="col-sm text-center">
        <h2>Inicio de Sesión</h2>
      </div>        
  </div>
  <br>
  <div class="row">
      
      <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 "></div>
      <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm text-center">Nombre de Usuario / email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm text-center">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div> 
  </form>
  
  <div class="col-sm text-center">
      <button type="submit" class="btn sara">Acceso</button>
  </div>
     <!-- footer del form -->
  <br>
    <div class="row">      
      <div class="col-6 align-self-end text-center">
          <p class="text-center">¿No tienes cuenta?</p>    
          <input type="submit" class="btn sara" name="submit" value="Crear cuenta"/>
      </div>
      <div class="col-6 align-self-end text-center">
          <p class="text-center">¿Has olvidado tu contraseña?</p>    
          <input type="submit" class="btn sara" name="submit" value="Recuperar"/>  
      </div>
    </div>
      </div>
  <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2"></div>    
      
  </div>
    
  </div>         
  <br>
  <?php include "./components/footer.php";?>   
</body> 
      
</html>
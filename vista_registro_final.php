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
    <!--1--> 
  <br>     
  <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 text-center">
              <h3>¡Gracias! Su usuario ha sido registrado correctamente</h3>
          </div>
      <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
  </div> 
  <br>   
 <!--2-->
 <div class="row">
     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-1"></div>
     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-10">
        <h4>Usuario:NombredeUsuario1</h4>
        <br>
        <h4>Contraseña:*******</h4>
        <br>
        <h4>Correo electrónico:</h4>
        <h4>bananatube@gmail.com</h4> 
     </div>
     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-1"></div>
 </div>
 <br>
 <div class="row">
     <input type="submit" class="btn sara" name="submit" value="Ir a mi perfil"/>
 </div>
  <br>
  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
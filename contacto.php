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
          <h2>Contáctanos</h2>
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
    <label for="nombre" class="col-sm text-center">Nombre(*)</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="">
    <small id="nombreHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm text-center">Correo electrónico(*)</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="">
  </div>
  <div class="form-group">
    <label for="comentario" class="col-sm text-center">Comentarios</label>
    <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Por favor dinos tus comentarios"></textarea>
  </div>
  <br>
</form>
<button type="submit" class="btn sara" data-toggle="modal" data-target="#modal5">Enviar</button>
       
   </div>
   <div class="col-xl-2 col-lg-2 col-md-1 "></div> 
</div>    
     

  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
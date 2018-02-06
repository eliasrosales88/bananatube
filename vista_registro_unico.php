<!DOCTYPE html>
<html lang="es">
<head>
  <?php include "./components/head.php";?>
  <title>BananaTube</title>
</head>
<body class="container-fluid bg_main">

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
    <div class="col-sm "> 
    <div class="alert alert-danger" role="alert">
     This is a danger alert—check it out!
    </div>
    </div>
    </div>
 <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
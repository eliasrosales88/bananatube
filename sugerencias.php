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
      <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12   text-center">
            <h2>Sugerencias</h2>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
      </div>



      <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
      <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
              This is a danger alert—check it out!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
      </div>


      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </form>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
      </div>

            <div class="row">
                    <!--<button type=""class="btn sara btn-md col-md-3 col-md-offset-6" data-toggle="modal" data-target="#exampleModalCenter">ENVIAR</button>-->
                    <div class="offset-10">
                      <button type=""class="btn sara" data-toggle="modal" data-target="#exampleModalCenter">ENVIAR</button>   
                    </div>   
          
      </div>    
        <!--</form>-->
      </div>

          
      </div> 



      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>¡¡¡GRACIAS!!!</h3> 
              </hr>
            <h3>¡Revisaremos tu mensaje atentamente!</h3> 
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>  
            <!--CIERRA MODAL-->
         
  
   <br> 
  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
</body>
</html>


<!--AÑADIR BOOTSTRAP Y ALERT, Y HACER UN PUSH-->
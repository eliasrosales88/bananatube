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
      <h2>Sugerencias</h2>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
              This is a danger alert—check it out!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
          <div>Por favor, nos encantaría saber tus comentarios y sugerencias :)</div>
              <textarea rows="8" cols="50" >
              </textarea>
          </form>
          <button type=""class="btn sara btn-md col-md-3 col-md-offset-6" data-toggle="modal" data-target="#exampleModalCenter">ENVIAR</button>
          <!--MODAL-->



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
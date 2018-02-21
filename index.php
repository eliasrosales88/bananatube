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
      <div id="video-momento" class="row mb-5">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center mt-4">
          <h2>Vídeo del momento</h2>
          <video width="100%" controls preload>
            <source src="./videos/bunny.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML
          </video>
          <div id="ranking-bananas" class="row">
            <div class="col-1"></div>
            <div class="col-1"><img onclick="valoracionBanastar(1)" id="banastar1" data-id="1" src="./img/banastar.png" alt="banastar1" class="d-none"><img onclick="valoracionBanastar(1)"  id="banastar_dark1" data-id="1" src="./img/banastar_dark.png" alt="banastar1_dark"></div>
            <div class="col-1"><img onclick="valoracionBanastar(2)" id="banastar2" data-id="2" src="./img/banastar.png" alt="banastar2" class="d-none"><img onclick="valoracionBanastar(2)"  id="banastar_dark2" data-id="2" src="./img/banastar_dark.png" alt="banastar2_dark"></div>
            <div class="col-1"><img onclick="valoracionBanastar(3)" id="banastar3" data-id="3" src="./img/banastar.png" alt="banastar3" class="d-none"><img onclick="valoracionBanastar(3)"  id="banastar_dark3" data-id="3" src="./img/banastar_dark.png" alt="banastar3_dark"></div>
            <div class="col-1"><img onclick="valoracionBanastar(4)" id="banastar4" data-id="4" src="./img/banastar.png" alt="banastar4" class="d-none"><img onclick="valoracionBanastar(4)"  id="banastar_dark4" data-id="4" src="./img/banastar_dark.png" alt="banastar4_dark"></div>
            <div class="col-1"><img onclick="valoracionBanastar(5)" id="banastar5" data-id="5" src="./img/banastar.png" alt="banastar5" class="d-none"><img onclick="valoracionBanastar(5)" value= true id="banastar_dark5" data-id="5" src="./img/banastar_dark.png" alt="banastar5_dark"></div>
            <div class="col-3">Charles Darwing</div>
            <div class="col-2">123.456 visitas</div>
            <div class="col-1"></div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-4">
          <div class="row">
            <h4 class="mt-5">Big Buck Bunny</h4>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur accusamus dignissimos fugiat unde doloremque eaque aut officiis ut rerum tempore ex molestias quibusdam, expedita amet autem. Animi impedit aperiam officiis!</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h4>Comparte este vídeo</h4>
              <div class="row">
                <div class="col-4">compartir</div>
                <div class="col-4">compartir</div>
                <div class="col-4">compartir</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="valorados" class="row">
        <div class="row ml-4">
          <h4>Más Valorados</h4>
        </div>
        <div class="row ml-4 mr-4">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
            <video width="100%" controls>
              <source src="./videos/bunny.mp4" type="video/mp4">
              Tu navegador no soporta videos HTML
            </video>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
            <video width="100%" controls>
              <source src="./videos/bunny.mp4" type="video/mp4">
              Tu navegador no soporta videos HTML
            </video>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
            <video width="100%" controls>
              <source src="./videos/bunny.mp4" type="video/mp4">
              Tu navegador no soporta videos HTML
            </video>
          </div>
        </div>
      </div>
      <div id="vistos" class="row">
        <div class="row ml-4">
          <h4>Más Vistos</h4>
        </div>
        <div class="row">

        </div>  
      </div>
     

  </div>
  <!-- PIE DE PAGINA -->  
  <?php include "./components/footer.php";?>
  </body>
</html>
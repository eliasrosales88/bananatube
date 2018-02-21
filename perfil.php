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
   <div>
        <img src="./img/teslaAvatar.png" al alt="Profile picture">
   </div>
   <div>
        <div>Nikola Tesla</div>
        <div>@PalomitaKawaii</div>
        <div>Fui un inventor, ingeniero mecánico, eléctrico y físico de origen serbio. Fan de la electricidad y las palomas.</div>
   </div>
   <div>
       <div>
           NavBAr
       </div>
       <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="video-fluid">
                        <source src="https://www.youtube.com/watch?v=927HxTAQ2rg" type="video/mp4" />
                    </video>        
                </div>
                <div class="carousel-item">
                    <img src="./img/fav.png" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <video class="video-fluid">
                        <source src="https://www.youtube.com/watch?v=ojYme73UBko" type="video/mp4" />
                    </video>
                </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
                </div>
                    </div> 
                </div>
     </div>         

  <?php include "./components/footer.php";?>   
</body> 
      
</html>
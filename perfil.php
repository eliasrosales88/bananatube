<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "./components/head.php";?>
    <title>BananaTube</title>
</head>

<body class="bg_main">
    <!-- BEGINNING del container fluid -->
    <div class="container-fluid">
        <!-- SIDEBAR -->
        <?php include "./components/sidebar.php";?>
        <!-- CABECERA -->
        <?php include "./components/header.php";?>
        <!-- CONTENIDO -->
        <div class="row mt-2">
            <img class="rounded mx-auto d-block" src="./img/teslaAvatar.png" al alt="Profile picture">
        </div>
        <div class="row">
            <h5 class="col text-center">
                Nikola Tesla
            </h5>
        </div>
        <div class="col text-center">
            @PalomitaKawaii
        </div>
        <div class="col text-center">
            Fui un inventor, ingeniero mecánico, eléctrico y físico de origen serbio. Fan de la electricidad y las palomas.
        </div>
        <div class="row">
            <div class="col-4">
            <div class="table-responsive-md col-4">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Vídeos subidos</td>
                            <td>Todos mis vídeos</td>
                            <td>Compartidos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
        </div>
        <div class="row">
            <div id="carouselVideos" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://misanimales.com/wp-content/uploads/2016/10/crecen-los-gatos.jpg" alt="First video">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://misanimales.com/wp-content/uploads/2016/10/crecen-los-gatos.jpg" alt="Second video">
                    </div>
                    <div class="carousel-item">
                        <video width="300" height="200" controls>
                            <source src="./videos/bunny.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>    
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselVideos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselVideos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>

        <!-- END del container fluid -->
    </div>

    <?php include "./components/footer.php";?>
</body>

</html>
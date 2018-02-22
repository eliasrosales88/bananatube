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
        <div class="col text-center mt-2">
            Fui un inventor, ingeniero mecánico, eléctrico y físico de origen serbio. Fan de la electricidad y las palomas.
        </div>
        <div class="row mt-4">
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
            <nav class="nav  nav-justified col-10 col-sm-8 col-md-6 col-lg-4">
                <ul class="nav  mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item nav-justified">
                        <a class="nav-link green " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Vídeos subidos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link green " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mis vídeos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link green " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Vídeos compartidos</a>
                    </li>
                </ul>
            </nav>
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
        </div>

        <div class="row">
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
            <div class="tab-content col-10 col-sm-8 col-md-6 col-lg-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p>Video 1</p>
                    <p>
                        <video width="320" height="240" controls>
                            <source src="./videos/bunny.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <p>Video 2</p>
                    <p>
                        <video width="320" height="240" controls>
                            <source src="./videos/bunny.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <p>Video 3</p>
                    <p>
                        <video width="320" height="240" controls>
                            <source src="./videos/bunny.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div>
            <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
        </div>
        <!-- END del container fluid -->
    </div>




    <?php include "./components/footer.php";?>
</body>

</html>
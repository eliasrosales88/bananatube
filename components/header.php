<header>
    <div class="row green">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
            <div class="row">
                <div id="header_barras" class="col-3">
                    <i class="fa fa-bars fa-3x float-left text-white ml-2 p-0 margin-top-15px" aria-hidden="true"></i>
                </div>
                <figure class="col-7">
                    <div class="text-center">
                        <img id="logo-banana" class="margin-top-25px mx-auto" src="img/logoweb2.png" alt="bananatube">
                    </div>
                </figure>
                <div class="col-2">
                    <i class="fa fa-ellipsis-v fa-3x d-md-none float-right text-white margin-top-15px" aria-hidden="true" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="text-center">
                                <?php /*include "header_component_registro.php"*/?>
                                <button id="btn_registro"  class="btn mb-2 sara" type="button">Registro</button>
                                <button id="btn_signin" class="btn mb-2 ana" type="button">Ingresar</button>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
            <form id="search_form" class="" action="" method="post">
                <div class="form-group">
                    <label for="search_principal"></label>
                    <input type="search" id="search_principal" name="search_principal" class="form-control" placeholder="Buscar...">
                </div>
            </form>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12 d-none d-sm-none d-md-block">
            <div class="margin-top-25px">
            <nav class="float-right">
                <?php /*include "header_component_registro.php"*/?>
                <button id="btn_registro_movil"  class="btn mb-2 sara" type="button">Registro</button>
                <button id="btn_signin_movil" class="btn mb-2 ana" type="button">Ingresar</button>
            </nav>
            </div>
        </div>

    </div>
</header>

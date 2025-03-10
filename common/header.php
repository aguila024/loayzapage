<header> <!-- 004468 -->
    <div class="uk-section-padding-11 fondo-gris uk-hidden@m">
        <div class="uk-container ">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-hidden@m">
                <?php include('./common/redes.php') ?>
            </div>

        </div>

    </div>
    <div class="uk-section-padding-11 fondo_menu_azul">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle uk-flex-between">
                <a href="javascript:" class="logo_header">
                    <img src="/assets/img/logo_horizontal.webp" alt="">
                </a>
                <div class="uk-flex uk-flex-middle uk-flex-between">
                    <button class="uk-button  uk-hidden@m" id="hamburguesa" uk-navbar-toggle-icon type="button" uk-toggle="target: #offcanvas-nav"></button>

                    <div class="menu_destokp uk-flex uk-flex-middle gap_20_de uk-visible@m">
                        <nav class="menu_destokp_ifeep">
                            <ul class="uk-list uk-width-1-1 uk-flex uk-flex-middle uk-margin-remove gap_20_de">
                                <li class="uk-margin-remove"><a href="index.php">Inicio</a></li>
                                <li class="uk-margin-remove"><a href="/nosotros.php">Nosotros</a></li>
                                <li class="uk-margin-remove"><a href="/servicios.php">Servicio</a></li>
                                <li class="uk-margin-remove"><a href="/contactanos.php">Contacto</a></li>
                            </ul>

                        </nav>
                    </div>

                    <div id="offcanvas-nav" class="uk-hidden@m" uk-offcanvas="overlay: true">

                        <div class="uk-offcanvas-bar bg-white uk-flex uk-flex-column">
                            <button id="close-toggle" class="uk-button uk-flex-end" uk-toggle="target: #offcanvas-nav" style="z-index:1500">
                                <span uk-icon="icon: close" style="color: #000;"></span>
                            </button>

                            <ul class="uk-nav  uk-margin-small-top navegation-movil">

                                <div class="uk-navbar-top">
                                    <a href="/" class="uk-navbar-item uk-logo">
                                        <figure class="logo_ifeep_movile">
                                            <img src="/assets/img/logo.webp" alt="logo IFEEP">
                                        </figure>
                                    </a>
                                </div>

                                <li class="uk-nav-header uk-margin-small-bottom">IFEEP</li>
                                <li><a class="uk-flex" href="index.php">
                                        <figure class="icon-flecha mr-2 uk-flex"><img src="/images/footer/flecha.svg" alt=""></figure> Inicio
                                    </a></li>
                                <li><a class="uk-flex" href="/nosotros.php">
                                        <figure class="icon-flecha mr-2 uk-flex"><img src="/images/footer/flecha.svg" alt=""></figure> Nosotros
                                    </a></li>
                                <li><a class="uk-flex" href="/servicios.php">
                                        <figure class="icon-flecha mr-2 uk-flex"><img src="/images/footer/flecha.svg" alt=""></figure> Servicio
                                    </a></li>
                                <li><a class="uk-flex" href="/contactanos.php">
                                        <figure class="icon-flecha mr-2 uk-flex"><img src="/images/footer/flecha.svg" alt=""></figure>Contacto
                                    </a></li>

                                <div class="redes_menu_movile">
                                    <?php include('./common/redes2.php') ?>
                                </div>

                            </ul>



                        </div>

                    </div>
                </div>
                <div class="redes_menu_he_foter uk-visible@m">
                    <?php include('./common/redes.php') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="uk-section-padding-11 fondo_blanco">
        <div class="uk-container">


        </div>
    </div> -->
</header>
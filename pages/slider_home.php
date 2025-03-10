<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

        <div class="uk-slider-items uk-child-width-1-1">
            <div>
                <div class="container_item_carrucel swiper_slider_galeria uk-height-1-1">
                    <div class=" uk-container">
                        <div class="uk-child-width-1-2@m item_carrucel_home uk-grid-collapse " uk-grid> <!-- uk-padding -->

                            <div>
                                <div class="container_video_slider">
                                    <div class="uk-padding "> <!-- uk-padding -->
                                        <video id="player" playsinline controls data-poster="/assets/img/logo_horizontal.webp">
                                            <source src="/assets/video/excel.mp4" type="video/mp4">
                                            <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                                        </video>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="container_derecho_slider uk-flex">
                                    <div class="uk-flex uk-flex-column uk-padding item_derecho_slider uk-text-center bg-item-slider  "> <!-- uk-padding  -->
                                        <h2 class="uk-text-bold">¿Tienes dudas sobre un contrato o inversion inmoviliaria?</h2>
                                        <p>
                                            Protege tu inversión con asesoria legal experta. Evita riesgos innecesarios y asegura cada decisión con respaldo profesional.
                                        </p>
                                        <a href="javascript:" class="uk-button button_slider btn_principal">CONTÁCTANOS</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="container_item_carrucel  swiper_slider_galeria_2 uk-height-1-1">
                    <div class="uk-container">
                        <div class="uk-grid-collapse item_carrucel_home uk-flex-center" uk-grid> <!-- uk-padding -->
                            <div>
                                <div class="container_derecho_slider uk-flex uk-flex-column">
                                    <div class="uk-flex uk-flex-column uk-padding item_derecho_slider_2 uk-text-center bg-item-slider  "> <!-- uk-padding  -->
                                        <h2 class="uk-text-bold">¿Necesita una minuta de Compra y Venta?</h2>
                                        <span class="uk-text-bold text_1">¡Ármalo tu mismo!</span>
                                        <span class="text_2">Solo llena los datos y nuestros abogados revisarán el contrato</span>

                                    </div>
                                    <a href="#modal-full" class="uk-button button_slider btn_principal uk-margin-medium-top" uk-toggle>CLICK AQUI</a>

                                    <?php include('./common/slider_minuta.php') ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <a class="uk-position-center-left uk-position-small antes" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small despues" href uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin container_ruedita_slider"></ul>

</div>
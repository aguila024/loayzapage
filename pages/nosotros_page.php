<div class="uk-section-default">
    <div class="uk-container-expand n_fondo uk-flex uk-flex-middle uk-flex-center uk-height-large">
        <div class="uk-text-center">

            <h3 class="n_titulo">NOSOTROS</h3>
            <p class="n_subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aspernatur
                provident
                velit atque expedita nobis placeat reiciendis? Tempora cumque totam officia hic ipsum eum illum. Omnis
                fuga perferendis adipisci culpa.</p>

        </div>
    </div>

    <div class="uk-container uk-margin-large-top">
        <div>
            <div>
                <h3 class="n_equipo_titulo">Nuestro Equipo</h3>
            </div>
            <div class="uk-margin-medium">
                <p class="n_equipo_parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse iusto
                    illum accusantium maiores illo dolorum cupiditate temporibus, eveniet voluptatum, veniam fugit
                    ratione consequatur suscipit ex dolor, quasi deleniti ab?. Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Dolores eveniet veniam, cum nulla ipsam quidem possimus, voluptate, ut eos neque
                    tempora eum. Atque sit est voluptatem consequuntur eum ullam nobis!</p>
            </div>
            <div class="uk-grid-column-default uk-grid-row-large uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-text-center n_equipo_galeria"
                uk-grid>

                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div>
                        <div class="uk-column-1-1 uk-card-default uk-box-shadow-medium uk-text-center n_equipo_card"
                            uk-toggle="target: #modal">
                            <div class="">
                                <img src="/assets/img/nosotros/colaborador.jpg">
                            </div>
                            <div class="uk-padding-small">
                                <h3 class="uk-card-title n_equipo_nombre">Rodrigo Cherre</h3>
                                <h4 class="uk-text-meta n_equipo_cargo">Gerente de Ventas</h4>
                                <a class="n_equipo_correo">inscripcion@prueba.com</a>
                            </div>

                        </div>
                    </div>

                    <div id="modal" class="uk-modal-full" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse   uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                <div class="uk-background-cover n_equipo_modal_imagen" uk-height-viewport></div>
                                <div class="uk-padding-small">
                                    <div>
                                        <h1>Rodrigo Cherre</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                            nulla
                                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                            officia
                                            deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div>
                                        <h1>Experiencia</h1>

                                        <div class="uk-flex-column">
                                            <div class="uk-flex">
                                                <div class="uk-flex uk-flex-center uk-flex-middle n_modal_icono">
                                                    <div class=" uk-flex  uk-flex-center uk-flex-middle n_circulo_logros">
                                                        <img class="n_imagen_logro"
                                                            src="../assets/img/nosotros/logros.webp">
                                                    </div>
                                                </div>

                                                <div style="width:80%">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam,
                                                        quis
                                                        nostrud
                                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                </div>

                                            </div>
                                            <div class="uk-flex">
                                                <div class="uk-flex uk-flex-center uk-flex-middle n_modal_icono">
                                                    <div class=" uk-flex  uk-flex-center uk-flex-middle n_circulo_logros">
                                                        <img class="n_imagen_logro"
                                                            src="../assets/img/nosotros/logros.webp">
                                                    </div>
                                                </div>

                                                <div style="width:80%">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam,
                                                        quis
                                                        nostrud
                                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                </div>

                                            </div>




                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                <?php } ?>



            </div>
        </div>

    </div>
</div>
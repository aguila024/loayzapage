<div class="uk-section-default">
    <div class="uk-container-large n_fondo uk-flex uk-flex-middle uk-flex-center uk-height-large">
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
            <div class="uk-grid-column-default uk-grid-row-large uk-child-width-1-3@s uk-text-center n_equipo_galeria"
                uk-grid>
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div>
                        <div class="uk-card uk-card-default uk-box-shadow-medium uk-text-center n_equipo_card">
                            <div class="uk-card n_equipo_colaborador"> </div>
                            <h3 class="uk-card-title n_equipo_nombre">Juan Pérez</h3>
                            <h4 class="uk-text-meta n_equipo_cargo">Gerente de Ventas</h4>
                            <a class="n_equipo_correo"> inscripciom@prueba.com
                            </a>

                        </div>
                    </div>

                <?php } ?>



            </div>
        </div>

    </div>
</div>
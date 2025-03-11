<div class="uk-section section_services_home">
    <div class="uk-container uk-flex uk-flex-column">
        <div class="flex uk-flex-center uk-flex-middle title_subtitle uk-margin-medium-bottom">
            <h2 class="title_pages_services">NUESTROS SERVICIOS</h2>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500;">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="./assets/img/servicios/legal.jpg" width="1800" height="1200" alt="">
                        <div class="uk-transition-slide-bottom uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4 uk-margin-remove">Fade</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
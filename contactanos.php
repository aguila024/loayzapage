<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTÁCTANOS | JJLOAYZA</title>
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <?php include('./common/header.php') ?>
    <div class="uk-section contenedor_form_principal ">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle">
                <div class="datos_form ">
                    <div>
                        <h2>
                            Contáctanos <br>
                            Estamos a tu disposición
                        </h2>
                    </div>
                    <div class="list_detalle_contacto uk-flex">
                        <div class="item_detalle_contacto">
                            <div class="icon_detalle">
                                <img src="./assets/img/phone.svg" width="18px" height="18px">
                            </div>
                            <div class="uk-link-text">
                                <a href="tel:+51942851103">+51 942 851 103</a>
                            </div>
                        </div>
                    </div>
                    <div class="list_detalle_contacto uk-flex">
                        <div class="item_detalle_contacto">
                            <div class="icon_detalle">
                                <img src="./assets/img/email.svg" alt="" width="18px" height="18px">
                            </div>
                            <div class="uk-link-text">
                                <a href="mailto:legal@jjloayza.com.pe">legal@jjloayza.com.pe</a>
                            </div>
                        </div>
                    </div>
                    <div class="list_detalle_contacto uk-flex">
                        <div class="item_detalle_contacto">
                            <div class="icon_detalle logo_detalle">
                                <img src="./assets/img/location.svg" alt="" width="16px" height="16px">
                            </div>
                            <div class="uk-link-text">
                                <a href="https://maps.app.goo.gl/m7vb9HxbyQCcrwiq6">Calle Porta 170, oficina 604<br>
                                    Miraflores, Lima, Perú</a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin uk-flex uk-flex-start">
                        <a class="uk-button uk-width-auto text_blanco fondo-azul fuente2" href="https://wa.link/lvfz3c">CONTÁCTANOS</a>
                    </div>
                </div>

                <div class="uk-width-expand tamaño_contenedor">
                    <form class="contenedor_form" action="" method="post" id="formulario">
                        <div class="uk-grid-small uk-child-width-1-1@m" uk-grid>
                            <div class="uk-form-controls">
                                <input class="uk-input fondo-azul text_blanco" type="text" id="nombre" name="nombre" placeholder="Déjanos tu consulta" required>
                            </div>
                        </div>

                        <div class="uk-grid-small uk-child-width-1-1@m" uk-grid>
                            <div class="uk-form-controls">
                                <input class="uk-input fondo-azul text_blanco" type="text" id="nombre" name="nombre" placeholder="Nombres y Apellidos" required>
                            </div>
                        </div>

                        <div class="uk-grid-small uk-child-width-1-1@m" uk-grid>
                            <div class="uk-form-controls">
                                <input class="uk-input fondo-azul text_blanco" type="text" id="celular" name="celular" placeholder="Celular" required>
                            </div>
                        </div>

                        <div class="uk-grid-small uk-child-width-1-1@m" uk-grid>
                            <div class="uk-form-controls">
                                <input class="uk-input fondo-azul text_blanco" type="email" id="correo" name="correo" placeholder="Correo" required>
                            </div>
                        </div>

                        <div class="uk-grid-small uk-child-width-1-1@m" uk-grid>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea fondo-azul text_blanco" id="mensaje" name="mensaje" rows="5" placeholder="Consulta" required style="resize: none;"></textarea>
                            </div>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="uk-margin uk-flex uk-flex-center">
                            <button class="uk-button button_slider btn_principal" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
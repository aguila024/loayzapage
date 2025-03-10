<div id="modal-full" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s " uk-grid>
            <div>
                <div class="uk-background-cover uk-height-1-1" style="background-image: url('/assets/img/modal_slider.jpg');" uk-height-viewport></div>
            </div>
            <div class="uk-padding-large uk-flex uk-flex-column">
                <div class="title_subtitle">
                    <h2 class="uk-margin-remove">Contrato Minuta</h2>
                    <span>Arma tu Minuta de Compra y Venta</span>
                </div>

                <div class="container_formulario_modal">
                    <form class="" action="" method="post" id="formulario">

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="text" id="nombre" name="nombre" placeholder="Nombres y Apellidos" required>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="text" id="dni" name="dni" placeholder="Dni" required>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="text" id="celular" name="celular" placeholder="Celular" required>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="text" id="adress" name="adress" placeholder="Dirección" required>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="text" id="nro_partida" name="nro_partida" placeholder="Nro partida electrónica" required>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <select class="uk-select text_negro" id="select_ciudad" name="select_ciudad">
                                    <option>Seleccionar Ciudad</option>
                                    <option>Option 01</option>
                                    <option>Option 02</option>
                                </select>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <select class="uk-select text_negro" id="select_departamento" name="select_departamento">
                                    <option>Seleccionar Departamento</option>
                                    <option>Option 01</option>
                                    <option>Option 02</option>
                                </select>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">
                            <div class="uk-form-controls">
                                <select class="uk-select text_negro" id="select_distritos" name="select_distritos">
                                    <option>Seleccionar Distrito</option>
                                    <option>Option 01</option>
                                    <option>Option 02</option>
                                </select>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-1@m uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-icon container_icon_dollar"><img src="/assets/img/precio.svg" alt=""></span>

                                <input id="price" class="uk-input" type="number" placeholder="Precio" min="0" step="1.00">

                            </div>

                        </div>

                        <div class="uk-margin uk-child-width-1-1@m container_credito_h">
                            <label for="">Credito Hipotecario?</label>
                            <div class="uk-flex uk-padding-small group_checkbox">
                                <label><input class="uk-radio" type="radio" name="consulta_credito" checked> Si</label>
                                <label><input class="uk-radio" type="radio" name="consulta_credito"> No</label>
                            </div>

                        </div>

                        <div class="uk-margin uk-child-width-1-1@m">

                            <div class="uk-form-controls">
                                <input class="uk-input text_negro" type="date" id="f_max_pago" name="f_max_pago" placeholder="Fecha Máxima pago" required>
                            </div>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="uk-margin uk-flex uk-flex-center">
                            <button class="uk-button uk-width-auto uk-text-bold btn_principal" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-appointment" id="contacto" style="margin-top: 100px">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div id="map"></div>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Contáctanos</h3>
                <form id="contact-form" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input id="input-contact-name" type="text" class="form-control" placeholder="Tu nombre">
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                            <input id="input-contact-email" type="text" class="form-control" placeholder="Tu e-mail">
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                            <input id="input-contact-tel" type="text" class="form-control" placeholder="Tu Nº de contacto">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="input-contact-message" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="alert alert-danger contact-form-alerts">
                        <ul>
                            <li class="name-required"><i class="fa fa-exclamation-circle"></i> El campo Nombre es obligatorio</li>
                            <li class="email-required"><i class="fa fa-exclamation-circle"></i> El campo Email es obligatorio</li>
                            <li class="tel-required"><i class="fa fa-exclamation-circle"></i> El campo Telefono es obligatorio</li>
                            <li class="message-required"><i class="fa fa-exclamation-circle"></i> El campo Mensaje es obligatorio</li>
                            <li class="error-recaptcha"><i class="fa fa-exclamation-circle"></i> Error en ReCaptcha</li>
                            <li class="email-format"><i class="fa fa-exclamation-circle"></i> El campo Email tiene un formato incorrecto</li>
                            <li class="message-limit"><i class="fa fa-exclamation-circle"></i> El limite del mensaje es de 1000 caracteres</li>
                        </ul>

                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{env('PUBLIC_KEY_RECAPTCHA')}}"></div>
                    </div>
                    <div class="form-group">
                        <button id="btn-send-message" type="submit" class="btn btn-primary py-3 px-4">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        @include('theme.modals.sent-message-modal')
    </div>
</section>

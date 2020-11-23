<section class="ftco-appointment" id="contacto" style="margin-top: 100px">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1183.7129229207314!2d-70.7285667836466!3d-32.75460667462761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x968816cfff14e44d%3A0x52e315e1e214e354!2sEstaci%C3%B3n%20Riquelme%20Restobar!5e0!3m2!1ses!2scl!4v1606128236961!5m2!1ses!2scl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

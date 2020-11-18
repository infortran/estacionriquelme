/**
 * Created by freddy on 18-11-20.
 */
$(document).ready(function(){
    $('#contact-form').submit(function(e){
        e.preventDefault();
        contactForm();
        resetFormAlerts();
        //$('#modal-mensaje-enviado').modal('show');
    });
    $('#input-contact-name').focus(function(){resetFormAlerts()});
    $('#input-contact-email').focus(function(){resetFormAlerts()});
    $('#input-contact-tel').focus(function(){resetFormAlerts()});
    $('#input-contact-message').focus(function(){resetFormAlerts()});

    $('#sent-message-modal').on('hidden.bs.modal', function (e) {
        location.reload();
    })
});

function contactForm(){
    var data = new FormData();
    data.append('name', $('#input-contact-name').val());
    data.append('email', $('#input-contact-email').val());
    data.append('tel', $('#input-contact-tel').val());
    data.append('message', $('#input-contact-message').val());
    data.append('g-recaptcha-response', grecaptcha.getResponse());
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'/contacto',
        method:'POST',
        data:data,
        cache:false,
        contentType:false,
        processData:false,
        dataType:'json',
        beforeSend:function(){
            //$('#btn-send-message').addClass('active');
            $('#btn-send-message').html('<i class="fa fa-spinner fa-spin"></i>')
        },
        success:function(json){
            if($.isEmptyObject(json.error)){
                $('#btn-send-message').html('<i class="fa fa-check"></i>');
                $('#sent-message-modal').modal('show');
                setTimeout(function(){
                    $('#btn-send-message').html('Enviar Mensaje');
                },3000);
            }else{
                setTimeout(function(){
                    $('#btn-send-message').html('Enviar Mensaje');
                    //$('#btn-enviar-mensaje').removeClass('success active');
                    if(!$.isEmptyObject(json.error.name)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.name-required').show();
                    }
                    if(!$.isEmptyObject(json.error.email)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.email-required').show();
                    }
                    if(!$.isEmptyObject(json.error.subject)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.tel-required').show();
                    }
                    if(!$.isEmptyObject(json.error.message)){
                        if(json.error.message == 'The message field is required.'){
                            $('.contact-form-alerts').fadeIn(800);
                            $('.message-required').show();
                        }else{
                            $('.contact-form-alerts').fadeIn(800);
                            $('.message-limit').show();
                        }
                    }
                    if(!$.isEmptyObject(json.error['g-recaptcha-response'])){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.error-recaptcha').show();
                    }
                },1000);
            }
        },
        error:function(x,y,z){
            console.log(x.responseText);
            alert('error')
        }
    });
}

function resetFormAlerts(){
    $('.contact-form-alerts').fadeOut(800);
    $('.name-required').fadeOut(600);
    $('.email-required').fadeOut(600);
    $('.subject-required').fadeOut(600);
    $('.message-required').fadeOut(600);
    $('.error-recaptcha').fadeOut(600);
    $('.email-format').fadeOut(600);
    $('.message-limit').fadeOut(600);
}
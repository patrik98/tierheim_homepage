/*  there are other libraries that could use "$" - so it is 100% save to use "jQuery" instead of "$"
 if you don't use any other libraries than jQuery you could still go with "$"
 so the following line would be
 $(document).ready(function() {
 */
jQuery(document).ready(function() {

    var registerForm = $('#registerForm');

  /*  $('.registerOverlay').click(function(e) {
        e.preventDefault();

        registerModal.modal('show');
    });*/


    //this is that we are able to trigger a submit although a button was clicked outside of your form!
    registerForm.find('.btn-success').click(function() {
        registerForm.find('form').trigger('submit', [this]);
    });

    //so we have some input fields
    registerForm.find('form').bind('submit', function(e, that) {
        e.preventDefault();

        registerForm.find('.btn-success').prop('disabled', true); //prevent sending the formular again while we check it

        hasError = false; //we are positive...

        if(typeof that === 'undefined') {
            that = registerForm.find('.btn-success').get(0);
        }

        var nonEmptyFields = ['#vname','#nname','#gebdat','#pwd','#pwd2','#email', '#strasse', '#hausnr', '#plz', '#ort'];

        for(i = 0; i < nonEmptyFields.length; i++) {
            if($(nonEmptyFields[i]).val() == '') {
                hasError = true;
                $(nonEmptyFields[i]).closest('.form-group').addClass('has-error');
            }
        }

        if(!hasError) {
            //check if pwd is long enough...
            if($('#pwd').val().length < 8) {
                $('#pwd').closest('.form-group').addClass('has-error');
                hasError = true;
            }
            else {

                if($('#pwd').val() != $('#pwd2').val()) {
                    $('#pwd2').closest('.form-group').addClass('has-error');
                    hasError = true;
                    registerForm.find('.btn-success').prop('disabled', false);
                } else {
                    //everything fine

                    $.ajax({
                        'url': $(this).attr('action'),
                        'method': $(this).attr('method'),
                        'data': $(this).serialize(),
                        //'dataType': "json",
                        'success': function (receivedData) {

                            if(receivedData.result)
                            {
                                toastr.success(receivedData.message);

                                window.setTimeout(function() {
                                    location.reload();
                                }, 2500);

                            }
                            else
                            {
                                registerForm.find('.form-group').removeClass('has-error');

                                $.each(receivedData.data.errorFields, function(key, value) {
                                    $('#'+key).closest('.form-group').addClass('has-error');
                                });
                            }

                            registerForm.find('.btn-success').prop('disabled', false);
                        }
                    });

                }
            }
        }

        registerForm.find('.btn-success').prop('disabled', false);


    });



});
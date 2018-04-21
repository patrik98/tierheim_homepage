/*  there are other libraries that could use "$" - so it is 100% save to use "jQuery" instead of "$"
 if you don't use any other libraries than jQuery you could still go with "$"
 so the following line would be
 $(document).ready(function() {
 */
jQuery(document).ready(function() {

    var loginModal = $('#login');

    $('.loginOverlay').click(function(e) {
        e.preventDefault();

        loginModal.modal('show');
    });


    //this is that we are able to trigger a submit although a button was clicked outside of your form!
    loginModal.find('.btn-default').click(function() {
        loginModal.find('form').trigger('submit', [this]);
    });

    //so we have some input fields
    loginModal.find('form').bind('submit', function(e, that) {
        e.preventDefault();

        loginModal.find('.btn-primary').prop('disabled', true); //prevent sending the formular again while we check it

        hasError = false; //we are positive...

        if(typeof that === 'undefined') {
            that = loginModal.find('.btn-default').get(0);
        }

        var nonEmptyFields = ['#email2', '#pwd2'];

        for(i = 0; i < nonEmptyFields.length; i++) {
            if($(nonEmptyFields[i]).val() == '') {
                hasError = true;
                $(nonEmptyFields[i]).closest('.form-group').addClass('has-error');
            }
        }

        if(!hasError) {
            //check if pwd is long enough...
            $.ajax({
                'url': $(this).attr('action'),
                'method': $(this).attr('method'),
                'data': $(this).serialize(),
                'dataType': "json",
                'success': function (receivedData) {

                    if(receivedData.result)
                    {
                        //toastr.success(receivedData.message);

                        location.href = receivedData.urlToRedirectTo;

                    }
                    else
                    {
                        loginModal.find('.form-group').removeClass('has-error');

                        console.log(receivedData.data.errorFields);

                        $.each(receivedData.data.errorFields, function(key, value) {


                            $('#'+value).closest('.form-group').addClass('has-error');
                        });

                        loginModal.modal('show');
                    }

                    loginModal.find('.btn-default').prop('disabled', false);
                }
            });
        }

        loginModal.find('.btn-default').prop('disabled', false);


    });



});
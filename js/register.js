
var notEmptyFields = ['#pwd', '#pwd2'];


for(var selector of notEmptyFields) {
    var tempElement = $(selector);

    tempElement.blur(function() {
        $(this).closest('.form-group').removeClass('has-error');

        if($(this).val() == '') {
            $(this).closest('.form-group').addClass('has-error');
        }

    });
}


//special case: pwd != pwd2

var pwdElement = $('#pwd');
var pwdElement2 = $('#pwd2');

pwdElement.blur(function() {
    if(pwdElement.val() != '') {
        pwdElement.closest('.form-group').removeClass('has-error');
        pwdElement2.closest('form-group').removeClass('has-error');

        if(pwdElement.val() != pwdElement2.val()) {
            pwdElement.closest('.form-group').addClass('has-error');
            pwdElement2.closest('form-group').addClass('has-error');
        }
    }
});


pwdElement2.blur(function() {
    if(pwdElement2.val() != '') {
        pwdElement.closest('.form-group').removeClass('has-error');
        pwdElement2.closest('form-group').removeClass('has-error');

        if (pwdElement.val() != pwdElement2.val()) {
            pwdElement.closest('.form-group').addClass('has-error');
            pwdElement2.closest('form-group').addClass('has-error');
        }
    }
});
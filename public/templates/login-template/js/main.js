
/*(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*==================================================================
    [ Show pass ]/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }

    });


})(jQuery);*/

function register() {

        var username  = $('#username').val();
        var password  = $('#password').val();
        var name      = $('#name').val();
        var cpassword = $('#password-confirm').val();
        var email     = $('#email').val();

        $('#error').html('<div class="alert alert-info">Submitting..</div>');

        // Check if all fields are entered or not.Also this is client side validation
        if (username.length == 0 || password.length == 0 || email.length == 0 || name.length == 0) {
            $('#error').html('<div class="alert alert-danger">All Fields are necessary</div>');
            return;
        }

        // Check if all fields are entered or not.Also this is client side validation
        if (username.length < 6) {
            $('#error').html('<div class="alert alert-danger">Username cannot be less than 6 character</div>');
            return;
        }

        if (password.length < 6) {
            $('#error').html('<div class="alert alert-danger">Password Length must be greater than 6 character</div>');
            return;
        }

        // Password and confirm password match validation
        if (password != cpassword) {
            $('#error').html('<div class="alert alert-danger">Password and Confirm Password do not match</div>');
            return;
        }

        $("#register-btn").prop('disabled', true);

        // Send ajax Request to code/ajaxregister.php  to enter details to database
        $.ajax({
            type: "POST",
            url: "code/ajaxregister.php",
            data: {'username': username, 'password': password, 'name': name, 'email': email, 'cpassword': cpassword}

        }).done(function (response) {

            //Used to parse the json recieved
            var obj = jQuery.parseJSON(response);

            if (obj.error == 'success') {
                $('#error').html('<div class="alert alert-success"><p>' + obj.msg + '</p></div>');
                window.location.href = "index.php";
            } else if (obj.error == 'error') {
                $("#register-btn").prop('disabled', false);
                $('#error').html('<div class="alert alert-danger"><p>' + obj.msg + '</p></div>');
            }
        });

    }

function register() {
  document.getElementById("log1").style.display = "none";
  document.getElementById("reg1").style.display = "block";
}

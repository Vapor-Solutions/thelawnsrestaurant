
(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    // var input = $('.validate-input .input100');

    // $('.validate-form').on('submit',function(){
    //     var check = true;

    //     for(var i=0; i<input.length; i++) {
    //         if(validate(input[i]) == false){
    //             showValidate(input[i]);
    //             check=false;
    //         }
    //     }

    //     return check;
    // });

    // $('.validate-form').on('submit', function (e) {
    //     e.preventDefault();

    //     $.ajax({
    //         url: '/maintenance-sub',
    //         type: "post",
    //         dataType: 'json',
    //         data: {
    //             name: $('#maintenance-name').value(),
    //             email: $('#maintenance-email').value()
    //         },
    //         success: function (response) {
    //             Swal.fire({
    //                 icon: 'success',
    //                 text: response.data
    //             })
    //             console.log(response)
    //         },
    //         error: function (response) {
    //             console.log(response)
    //         }
    //     });
    // })


    // $('.validate-form .input100').each(function(){
    //     $('.validate-form').focus(function(){
    //        hideValidate(this);
    //     });
    // });

    // function validate (input) {
    //     if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
    //         if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
    //             return false;
    //         }
    //     }
    //     else {
    //         if($(input).val().trim() == ''){
    //             return false;
    //         }
    //     }
    // }

    // function showValidate(input) {
    //     var thisAlert = $(input).parent();

    //     $(thisAlert).addClass('alert-validate');
    // }

    // function hideValidate(input) {
    //     var thisAlert = $(input).parent();

    //     $(thisAlert).removeClass('alert-validate');
    // }

        $('.validate-form').on('submit', function (e) {
            e.preventDefault();
            var _self = $('.validate-form');
            $('#nameErrorMsg').text(null);
            $('#emailErrorMsg').text(null);
            var __selector = _self.closest('input,textarea');
            _self.closest('div').find('input,textarea').removeAttr('style');
            _self.find('.error-msg').remove();
            _self.closest('div').find('button[type="submit"]').attr('disabled', 'disabled');
            var data = $('.validate-form').serialize();
            console.log(data)
            $.ajax({
                url: '/maintenance-sub',
                type: "post",
                dataType: 'json',
                data: data,
                success: function (data) {
                    _self.closest('div').find('button[type="submit"]').removeAttr('disabled');
                    Toast.fire({
                        icon: data.success ? 'success' : 'warning',
                        text: data.success
                    })

                    $('.validate-form').trigger("reset")
                },
                error: function (response) {
                    $('#nameErrorMsg').text(response.responseJSON.errors.name);
                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    _self.closest('div').find('button[type="submit"]').attr('disabled', false);
                }
            });
        });


})(jQuery);

"use strict";
$(document).ready(function () {

    //Success Toast Message
    function showSuccessToast(message) {
        const toast = $('#toast');
        toast.removeClass('bg-danger');
        toast.addClass('bg-success');
        $('.toast-body').text(message);
        toast.toast('show');
    }

    //Error Toast Message
    function showErrorToast(message) {
        const toast = $('#toast');
        toast.removeClass('bg-success');
        toast.addClass('bg-danger');
        $('.toast-body').text(message);
        toast.toast('show');
    }

    $('#login_form').submit(function(e) {
        e.preventDefault();

        const username = $('#username').val();
        const password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: './middleware/login_process.php',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                let data = JSON.parse(response);
                if (data['status'] === '0'){
                    showSuccessToast(data['message']);
                    setTimeout(function(){
                        window.location = data['url'];
                    }, 2000);
                } else {
                    showErrorToast(data['message']);
                }
            }
        });
    });

});
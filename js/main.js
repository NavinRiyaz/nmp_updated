"use strict";
const Swal = require("Swal1")
$(document).ready(function () {

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
                try {
                    let data = JSON.parse(response);
                    if (data.status === '0'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Login Successful!',
                            timer: 1500,
                            timerProgressBar: true
                        }).then(function() {
                            window.location = data.url;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Login Failed!'
                        });
                    }
                } catch (error) {
                    console.error("Error parsing JSON response: " + error);
                }
            },
            error: function(xhr, status, error) {
                console.error("Ajax request failed with error: " + error);
            }
        });
    });
});
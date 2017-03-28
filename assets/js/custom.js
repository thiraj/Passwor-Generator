$(document).on('click','#frm_submit',function () {

    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form#password_generator_frm").validate({

        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            domain: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm: {
                equalTo: "#password"
            }
        },

        // Specify validation error messages
        messages: {
            domain: "Please enter domain name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },

            email: "Please enter a valid email address"
        },

        // Submit form if validated
        submitHandler: function(form) {

            var data = $("#password_generator_frm :input").serialize();
            $("#password_generator_frm :input").prop('disabled',true);

            $.ajax({
                type: "POST",
                url: 'php/password_hash.php',
                dataType:'json',
                data:data,
                success:function(result){

                    document.getElementById('keyArea').innerHTML = result;
                    $('#keyDiv').show();

                    $("#password_generator_frm :input").prop('disabled',false);

                },
                error:function () {

                    alert('Whoops..! Something went wrong');
                    $("#password_generator_frm :input").prop('disabled',false);
                }
            });
        }

    });




});


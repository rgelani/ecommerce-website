<!--jquery library -->
<script src="{{asset('user/user-assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrape js -->
<script src="{{asset('user/user-assets/js/bootstrap.bundle.min.js')}}"></script>
<!--slike min  -->
<script src="{{asset('user/user-assets/js/slick.min.js')}}"></script>
<!-- on scroll event library -->
<script src="{{asset('user/user-assets/js/aos.js')}}"></script>
<!-- Main Activation JS -->
<script src="{{asset('user/user-assets/js/script.js')}}"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
    $(document).ready(function() {
        $('#login-form-id').validate({
            rules: {
                phone_no: {
                    required: true,
                },
                otp: {
                    required: true,
                },
            },
        });
    });
</script>

<script>
    const sendOtpBtn = $('#on-send-otp')

    sendOtpBtn.on("click", function(e) {
        e.preventDefault()

        removeCustomErrorClass()

        var phone_no = $('#phone_no_id').val()

        $.ajax({
            url: "{{route('send-user-otp')}}",
            type: "POST",
            data: {
                phone_no: phone_no
            },
            success: function(response) {
                if (response.status === 200) {
                    console.log('200')
                    addCustomErrorClass(response, $('.phone_no'), "success")
                } else {
                    console.log('4334')
                    addCustomErrorClass(response, $('.phone_no'), "error")
                }
            },
            error: function(response) {
                console.log('3543')
                errorCommonResponse(response)
            }
        });
    });

    $('#on-login').on("click", function(e) {
        e.preventDefault();

        $('.custom_error_class').remove()

        var form = $('#login-form-id')[0];
        var formData = new FormData(form)

        $.ajax({
            url: "{{route('login-user')}}",
            type: "POST",
            data: formData,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status === 200) {
                    $('#login-form-id').trigger("reset");
                    $('.main-login-page').removeClass("active");
                } else {
                    $('.custom-err').css("visibility", "visible");
                    $('.wrong_credential').html(response.msg)
                }
            },
            error: function(response) {
                $.each(response.responseJSON.errors, function(field_name, error) {
                    field_name = field_name.replaceAll(".", "_")
                    $(document).find($("." + field_name)).append('<span class="custom_error_class" style="color:red">' + error + '</span>')
                })
            }
        });
    });


    function removeCustomErrorClass() {
        $('.custom_error_class').remove()
    }

    function addCustomErrorClass(response, onClass, value) {
        value === 'success' ? onClass.append("<span class='custom_error_class' style='color:green'>" + response.message + "</span>") : onClass.append("<span class='custom_error_class' style='color:red'>" + response.message + "</span>")
    }

    function errorCommonResponse(response) {
        $.each(response.responseJSON.errors, function(field_name, error) {
            field_name = field_name.replaceAll(".", "_")
            $(document).find($("." + field_name)).append('<span class="custom_error_class" style="color:red">' + error + '</span>')
        })
    }
</script>
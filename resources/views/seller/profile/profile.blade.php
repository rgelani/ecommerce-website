@extends('seller.layouts.master')

@section('extra-css')
    <!-- Style Profile -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/profile.css') }}">
    <link href="{{ asset('seller-assets/css/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- <div class="main_content_lg">
        <div> -->
            <div class="" id="profile_main">
                <div class="profile_main_lable">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="profile_user_title_main">{{ $authUser->first_name }} {{ $authUser->last_name }}</h2>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="pe-2 pro_title_name">{{ $authUser->company_name }}</p>
                            <img src={{ asset('sellerProfile/' . $authUser->profile_avatar) }} alt=""
                                style="
                                width: 50px;
                                height: 50px;
                            ">
                        </div>
                    </div>
                    <div>
                        <ul class="d-flex profile_detail_list">
                            <li class="p-2 pb-3 border_profile_menu_active">
                                <a class="" href="{{ route('seller.profile.basic-details') }}">Profile</a>
                            </li>
                            <li class="p-2 pb-3 ">
                                <a class="" href="{{ route('seller.profile.bank-details') }}">Bank Details</a>
                            </li>
                            <li class="p-2 pb-3 ">
                                <a class="" href="{{ route('seller.profile.change-password') }}">Password</a>
                            </li>
                        </ul>
                    </div>


                </div>

            </div>
            <div class="mt-5 d-flex profile_info_main justify-content-between">
                <aside class="profile_left_side_main">
                    <div>
                        <p class="left_profile_title py-4">Profile</p>
                        <div class="borde_left_profile_main">
                            <div class="d-flex justify-content-center profile_big_img">
                                <form id="sellerProfileAvatar" enctype="multipart/form-data" method="post">
                                    <div class="avatar-wrapper">
                                        @csrf
                                        <img class="profile-pic"
                                            src="{{ asset('sellerProfile/' . $authUser->profile_avatar) }}" />
                                        <div class="upload-button">
                                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                        </div>
                                        <input type="hidden" name="authUser" value="{{ $authUser->id }}">
                                        <input class="file-upload" id="seller_avatar_id" type="file"
                                            name="seller_profile_avatar" value="{{ $authUser->profile_avatar }}" />
                                    </div>
                                </form>
                            </div>
                            <h3 class="text-center pt-4  pb-4 sub_title_profile">{{ $authUser->first_name }} {{ $authUser->last_name }} </h3>
                            <!-- {{ $authUser->company_name }} -->
                            {{-- <img --}}
                            {{-- src={{asset('seller-assets/image/profile/pen_profile.png')}} alt=""> --}}
                            <div class="d-flex justify-content-center justify-content-md-start justify-content-sm-start">
                                <ul class="compony_profile_info_main">
                                    <li class="py-2">Company Name:- <span>{{ $authUser->company_name }}</span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">PAN Card Number:- <span>{{ $authUser->pan_number }}</span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">GST No:- <span>{{ $authUser->gst_number }} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">Pick up Address:- <span>{{ $authUser->pickup_address }} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">Mobile no.:- <span>{{ $authUser->phone_number }} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="pt-4 pb-2 text-center">
                                        <button class="upload_new_avatar_profile" id="upload_avatar">
                                            Upload new avatar
                                        </button>
                                    </li>
                                    @php
                                        $cityName = \App\Models\City::where('id', $authUser->city_id)
                                            ->pluck('name')
                                            ->first();
                                        $stateName = \App\Models\State::where('id', $authUser->state_id)
                                            ->pluck('name')
                                            ->first();
                                    @endphp
                                    <li class="py-2 text-center address_profile_city_state ">
                                        {{ $cityName }},<span>{{ $stateName }} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

                <aside class="w-100 mx-5" id="basic_main">
                    <div class="">
                        <h3 class="basic_info_profile pt-5 pb-3 px-3">BASIC INFO</h3>
                        <div>
                            <form class="Basic_form" id="basic_seller_details">
                                @CSRF
                                <div class="d-flex">
                                    <div class="w-100">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" name="first_name" value="{{ $authUser->first_name }}"
                                            class="form-control position-relative pr-5" id="firstName" disabled>
                                         <button class="pen_btn_name" type="button" onclick="toggleDisable('firstName')"> 
                                         <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt=""> 
                                         </button> 
                                    </div>

                                    <div class="ms-3 w-100">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" name="last_name" value="{{ $authUser->last_name }}"
                                            class="form-control position-relative pr-5" id="lastName" disabled>
                                            <button class="pen_btn_name" type="button" onclick="toggleDisable('lastName')">
                                                <img src={{ asset('seller-assets/image/profile/pen_profile.png') }} alt="">
                                            </button>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="companyName" class="form-label">Company Name</label>
                                    <input type="text" name="company_name" value="{{ $authUser->company_name }}"
                                        class="form-control position-relative pr-5" id="companyName" disabled>
                                    <button class="pen_btn_name" type="button" onclick="toggleDisable('companyName')">
                                    <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                    </button>
                                </div>
                                <div class="my-2">
                                    <label for="panNumber" class="form-label">Pan Card No.</label>
                                    <input type="text" name="pan_number" value="{{ $authUser->pan_number }}"
                                        class="form-control" id="panNumber" readonly>
                                </div>

                                <div class="my-3">
                                    <label for="gstNumber" class="form-label">GST No.</label>
                                    <input type="text" name="gst_number" value="{{ $authUser->gst_number }}"
                                        class="form-control" id="gstNumber" readonly>
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="emailId" class="form-label mt-1 mb-1 pb-1 registered_email">Email</label>
                                    <div class="row mr-0">
                                        <div class="col">
                                            <input type="email" name="currEmail" value="{{ $authUser->email }}"
                                                class="form-control position-relative pr-5" id="currEmail" disabled>
                                            <button class="pen_btn_name" type="button" onclick="toggleDisable('currEmail')">
                                                <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                            </button>
                                            </div>
                                        <button type="button" class="btn btn-outline-secondary getOTP cancle_btn"
                                            id="send_email_otp" onclick="sendOTP();" style="height:fit-content; white-space: unset;">
                                            Send Otp
                                        </button>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col pl-0">
                                        <input type="number" value="" class="form-control position-relative"
                                        placeholder="Enter OTP send in your email" id="otp">
                                        </div>
                                        <button type="button"
                                        class="btn btn-outline-secondary getOTP cancle_btn removeVerifyOtp"
                                        onclick="validateOtp();" style="white-space: unset;">
                                            VERIFY OTP
                                        </button>
                                    </div>
                                    <div class="otp_alert"></div>
                                    <div class="ms-3 ">
                                        <label for="examplename" class="form-label gst_spache  mt-1 mb-1"> Required
                                            text</label>
                                    </div>
                                </div> -->
                                <div class=" d-flex">
                                    <div class=" w-100">
                                        <div class="w-100">
                                                <label for="examplename"
                                                    class="form-label mt-1 mb-1 pb-1" aria-required="true" >EMAIL</label>
                                                <input required type="email" name="currEmail" value="{{ $authUser->email }}"
                                                    class="input_pading_for_half_width form-control position-relative"
                                                    id="currEmail" disabled>
                                                <button type="button" class="pen_btn_name penget_otp" onclick="toggleDisable('currEmail')">
                                                    <img src="{{asset('seller-assets/image/profile/pen_profile.png')}}"
                                                        alt="">
                                                </button>
                                        </div>
                                    </div>
                                    <div class="ms-3 ">
                                        <label for="examplename"
                                                class="form-label gst_spache  mt-1 mb-1">space
                                                cover</label>
                                        <button type="button"
                                                class="btn btn-outline-secondary getOTP cancle_btn ">GET
                                                OTP</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div>
                                    <input type="email" name="email" value="" placeholder="Enter OTP send in your email"
                                        class="form-control position-relative mb-3" id="emailId">
                                        </div>
                                        <!-- <button type="button"
                                        class="btn btn-outline-secondary getOTP cancle_btn removeVerifyEmail w-auto"
                                        onclick="verifyEmail();">
                                        Verify & Change Email
                                    </button> -->
                                </div>

                                <div class="mt-2">
                                    <label for="companyPick_up_aad" class="form-label py-1">Pick up Address</label>
                                    <textarea name="" id="companyPick_up_aad pickupAddresId" cols="100" rows="4"
                                                            class="input_pading_for_half_width form-control position-relative text_copany_GST "
                                                            placeholder="">{{ $authUser->pickup_address }}</textarea>
                                     <button class="pen_btn_name pen_pickup" type="button">
                                     <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                     </button>
                                </div>
                                <div class=" d-flex"> 
                                    <div class=" w-100"> 
                                        <div class="w-100"> 
                                            <label for="phoneNumber" class="form-label mb-1 pb-1">Mobile no.</label> 
                                            <input type="text" name="phone_number" value="{{$authUser->phone_number}}" class="form-control position-relative pr-5" id="phoneNumber" disabled> 
                                            <button class="pen_btn_name penget_otp" type="button" onclick="toggleDisable('phoneNumber')"> 
                                            <img src={{asset('seller-assets/image/profile/pen_profile.png')}} 
                                            alt=""> 
                                            </button> 
                                        </div> 
                                    </div> 
                                    <div class="ms-3 "> 
                                        <label for="examplename" class="form-label gst_spache  p-0 mt-1 mb-1"> Required text</label> 
                                        <button type="submit" class="btn btn-outline-secondary getOTP cancle_btn">GET OTP 
                                        </button> 
                                    </div> 
                                </div> 
                                <div class=" mb-3"> 
                                 <input type="text" class="form-control" placeholder="Enter OTP send in your mobile" id="verifyMobileOtp"> 
                                </div>

                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary save_btn">
                                        CANCEL
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary save_btn"
                                        onclick="updateBasicSellerDetails();">SAVE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        <!-- </div>
    </div> -->
@endsection

@section('extra-script')
    <script src="{{ asset('seller-assets/js/sweetalert.min.js') }}"></script>

    <script>
        function sendOTP() {
            var email_id = '{{ $authUser->email }}';

            $("#otp").val(' ').show();

            $(".removeVerifyOtp").show();

            $(".removeVerifyEmail").show();

            $("#emailId").val(' ').prop("readonly", true);

            $('.custom_error_class').remove();

            $(".otp_alert").html("<span class='custom_error_class' style='color:green'>Sending, Please wait....!</span>");

            $.ajax({
                url: "{{ route('seller.verify-email-send-otp') }}",
                type: 'POST',
                data: {
                    email: email_id
                },
                success: function(response) {
                    if (response.status === 422) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:red'>" + response
                            .message + "</span>");

                    }
                    if (response.status === 200) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:green'>" + response
                            .message + "</span>");
                        $("#emailId").removeAttr('style').prop("readonly", false);
                    }
                },
                error: function(response) {
                    $.each(response.responseJSON.errors, function(field_name, error) {
                        $('.custom_error_class').remove();
                        $('#emailId').after('<span class="custom_error_class" style="color:red">' +
                            error + '</span>');
                    })
                }
            });
        }

        function validateOtp() {

            var email = '{{ $authUser->email }}';

            var otp = $('#otp').val();

            $(".removeVerifyOtp").show();

            $('.custom_error_class').remove();

            $.ajax({
                url: "{{ route('validate-otp') }}",
                type: 'POST',
                data: {
                    email: email,
                    otp: otp
                },
                success: function(response) {
                    console.log(response)
                    if (response.status === 422) {
                        $(".otp_alert").html("<span style='color:red'>" + response.message + "</span>");
                    }
                    if (response.status === 200) {
                        $('#otp').hide();
                        $(".otp_alert").html("<span style='color:green'>" + response.message + "</span>");
                        $(".next").removeAttr('style').prop("readonly", false);
                        $(".removeVerifyOtp").hide();
                    }
                },
                error: function(response) {
                    $.each(response.responseJSON.errors, function(field_name, error) {
                        $(document).find('[name=' + field_name + ']').after(
                            '<span class="custom_error_class" style="color:red">' + error +
                            '</span>');
                    })
                }
            });
        }

        function verifyEmail() {

            var registeredEmail = '{{ $authUser->email }}';
            var email_id = $('#emailId').val();
            console.log(email_id);
            $('.custom_error_class').remove();

            $(".otp_alert").html("<span class='custom_error_class' style='color:green'>Sending, Please wait....!</span>");

            $.ajax({
                url: "{{ route('seller.verify-email-id') }}",
                type: 'POST',
                data: {
                    email: email_id,
                    registeredEmail: registeredEmail
                },
                success: function(response) {
                    if (response.status === 422) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:red'>" + response
                            .message + "</span>");
                    }
                    if (response.status === 200) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:green'>" + response
                            .message + "</span>");
                        $("#emailId").prop("readonly", true);
                        $(".removeVerifyEmail").hide();
                    }
                },
                error: function(response) {
                    $.each(response.responseJSON.errors, function(field_name, error) {
                        $('.custom_error_class').remove();
                        $('#emailId').after('<span class="custom_error_class" style="color:red">' +
                            error + '</span>');
                    })
                }
            });
        }

        function updateBasicSellerDetails() {

            var formdetails = new FormData($("#basic_seller_details")[0]);

            $.ajax({
                url: "{{ route('seller.update-seller-basic-details') }}",
                type: 'POST',
                data: formdetails,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === 200) {
                        Swal.fire("Success", response.msg, "success");
                        setInterval(function() {
                            location.reload(true)
                        }, 1500);
                    }
                },
                error: function(response) {
                    $(document).find('.custom-errors').remove()
                    $.each(response.responseJSON.errors, function(field_name, error) {
                        field_name = field_name.replaceAll(".", "_");
                        $(document).find("input[name*=" + field_name + "]").after(
                            '<p class="text-danger custom-errors"> ' + error + '</p>');
                    })
                }
            });
        }

        function b64toBlob(b64Data, contentType, sliceSize) {
            contentType = contentType || '';
            sliceSize = sliceSize || 512;

            var byteCharacters = atob(b64Data);
            var byteArrays = [];

            for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                var slice = byteCharacters.slice(offset, offset + sliceSize);

                var byteNumbers = new Array(slice.length);
                for (var i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }

                var byteArray = new Uint8Array(byteNumbers);

                byteArrays.push(byteArray);
            }

            return new Blob(byteArrays, {
                type: contentType
            });
        }

        // Image Upload
        $(document).ready(function() {

            var readURL = function(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(".file-upload").click();
            });

            $("#upload_avatar").on('click', function(e) {
                e.preventDefault();
                appendFileAndSubmit();
            });

            function appendFileAndSubmit() {
                let formData = new FormData($('#sellerProfileAvatar')[0]);
                var image = $('#seller_avatar_id').val();
                // Submit Form and upload file
                if (image !== null) {

                    $.ajax({
                        url: "{{ route('update-seller-profile') }}",
                        data: formData, // the formData function is available in almost all new browsers.
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        dataType: "json", // Change this according to your response from the server.
                        error: function(err) {
                            $.each(err.responseJSON.errors, function(field_name, error) {
                                $('.custom_error_class').remove();
                                $('#seller_avatar_id').after(
                                    '<span class="custom_error_class" style="color:red">' +
                                    error + '</span>');
                            })
                        },
                        success: function(data) {
                            if (data.status === 200) {
                                location.reload();
                            }
                        }
                    });
                }
            }
        });

        function toggleDisable (id) {
            if($(`#${id}`).prop('disabled')){
                $(`#${id}`).prop('disabled', false);
            }else{
                $(`#${id}`).prop('disabled', true);
            }
        }
    </script>
@endsection

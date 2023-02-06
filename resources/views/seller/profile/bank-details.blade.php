@extends('seller.layouts.master')

@section('extra-css')
    <!-- Style Profile -->
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/profile.css')}}">
    <link href="{{asset('seller-assets/css/sweetalert.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main_content_lg">
        <!-- <div>
            <div class="cart_top_wrap cancle_cart_top">
                <ul>
                    <li>
                        <div class="top_right_icon">
                            <img src={{asset('seller-assets/image/product_view/search_big_icon.png')}} alt="icon">
                        </div>
                    </li>
                    <li>
                        <div class="top_right_icon cart_wrap">
                            <img src={{asset('seller-assets/image/product_view/cart.png')}} alt="icon">
                        </div>
                    </li>
                    <li>
                        <div class="top_right_icon notification_wrap">
                            <img src={{asset('seller-assets/image/product_view/bell.png')}} alt="icon">
                        </div>
                    </li>
                    <li>
                        <div class="top_right_icon" type="button" data-bs-toggle="modal"
                             data-bs-target="#exampleModal_2">
                            <img src={{asset('seller-assets/image/product_view/account.png')}} alt="icon">
                        </div>
                    </li>
                    <li>
                        <a href="#0" class="menu_trigger d-lg-none">
                            <svg width="9" height="13" viewBox="0 0 9 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z"
                                      fill="#FFCE55"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <div>
            <div class="" id="profile_main">
                <div class="profile_main_lable">
                    <div class="d-flex align-items-center justify-content-between">
                    <h2 class="profile_user_title_main">{{ $authUser->first_name }} {{ $authUser->last_name }}</h2>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="pe-2 pro_title_name">{{ $authUser->company_name }}</p>
                            <img src={{ asset('sellerProfile/' . $authUser->profile_avatar) }} alt="" style="
                            width: 50px;
                            height: 50px;
                        ">
                        </div>
                    </div>
                    <div>
                        <ul class="d-flex profile_detail_list">
                            <li class="p-2 pb-3 ">
                                <a class="" href="{{route('seller.profile.basic-details')}}">Profile</a></li>
                            <li class="p-2 pb-3 border_profile_menu_active">
                                <a class="" href="{{route('seller.profile.bank-details')}}">Bank Details</a></li>
                            <li class="p-2 pb-3 ">
                                <a class="" href="{{route('seller.profile.change-password')}}">Password</a></li>
                        </ul>
                    </div>


                </div>

            </div>
            <div class="mt-5 d-flex profile_info_main justify-content-between">
                <aside class="profile_left_side_main">
                    <div>
                        <p class="left_profile_title py-4">Bank details</p>
                        <div class="borde_left_profile_main">
                            <div class="d-flex justify-content-center profile_big_img">
                                <img src={{ asset('sellerProfile/' . $authUser->profile_avatar) }} class="img-fluid" alt="">
                            </div>
                            <h3 class="text-center pt-4  pb-4 sub_title_profile">{{$authUser->company_name}}
                            </h3>
                            <div class="d-flex justify-content-center justify-content-md-start justify-content-sm-start">

                                <ul class="compony_profile_info_main">
                                    <li class="py-2">Bank Name:- <span>{{$authUser->bank_name}} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">Bank Account Number:-
                                        <span>{{$authUser->bank_account_number}} </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                    <li class="py-2">IFSC Code:- <span>{{$authUser->ifsc_code}}  </span>
                                        <p><i class="fa-solid fa-pen-to-square"></i></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </aside>
                <aside class="w-100 mx-5" id="basic_main">
                    <div class="">
                        <h3 class="basic_info_profile pt-5 pb-3 px-3">Bank INFO</h3>
                        <div>
                            <form class="bank_details" id="bank_details_id">
                                @CSRF
                                <div class="mb-2">
                                    <label for="bank_name_id" class="form-label">Bank Name</label>
                                    <input type="text" name="bank_name" value="{{$authUser->bank_name}}" class="input_pading_for_half_width pr-5 form-control position-relative" id="bank_name_id" disabled>
                                                                        <button class="pen_btn_name" type="button" onclick="toggleDisable('bank_name_id')">
                                                                            <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                                                        </button>
                                </div>
                                <div class="mb-2">
                                    <label for="bank_account_number_id" class="form-label">Bank Account number</label>
                                    <input type="number" name="bank_account_number" value="{{$authUser->bank_account_number}}" class="input_pading_for_half_width pr-5 form-control position-relative"
                                            id="bank_account_number_id" disabled>
                                                                        <button class="pen_btn_name" type="button" onclick="toggleDisable('bank_account_number_id')">
                                                                            <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                                                        </button>
                                </div>
                                <div class="mb-2">
                                    <label for="confirm_bank_acc_number_id" class="form-label">Confirm bank Account Number</label>
                                    <input type="number" name="confirm_bank_account_number" value="{{$authUser->bank_account_number}}" class="input_pading_for_half_width pr-5 form-control position-relative" 
                                            id="confirm_bank_acc_number_id" disabled>
                                                                        <button class="pen_btn_name" type="button" onclick="toggleDisable('confirm_bank_acc_number_id')">
                                                                            <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                                                        </button>
                                </div>
                                <div class="mb-2">
                                    <label for="ifsc_code_id" class="form-label">IFSC Code</label>
                                    <input type="text" name="ifsc_code" value="{{$authUser->ifsc_code}}" class="input_pading_for_half_width pr-5 form-control position-relative" id="ifsc_code_id" disabled>
                                                                        <button class="pen_btn_name" type="button" onclick="toggleDisable('ifsc_code_id')">
                                                                            <img src={{asset('seller-assets/image/profile/pen_profile.png')}} alt="">
                                                                        </button>
                                </div>
                                <div class="upload_lg_block_res">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <label for="Upload_Cancle_Cheque" class="form-label mb-2 pb-1">Cancel Cheque</label>
                                            <input type="file" name="cancel_cheque" class="input_pading_for_half_width form-control position-relative" id="cancel_cheque_id">
                                            <button type="button" class="pen_btn_name penget_otp">
                                                <img src={{asset('seller-assets/image/profile/pen_profile.png')}}
                                                        alt="">
                                            </button>
                                        </div>
                                        <img src={{asset('uploads/'.$authUser->cancel_cheque)}} alt="" width="116px" height="88px">
                                    </div>
                                    <div class="ms-3 bank_upload_m_0">
                                        <label for="examplename" class="form-label gst_spache gst_spache_bank mb-2 pb-1"> Required text</label>
                                        <button type="button" class="btn btn-outline-secondary getOTP cancle_btn upload_btn_submit ">Upload</button>
                                    </div>
                                </div>
                                <div class="mt-1 d-flex align-items-center justify-content-end save_cancle_btn_bank">
                                    <button type="button" class="btn btn-outline-secondary save_btn" >CANCEL</button>
                                    <button type="button" class="btn btn-outline-secondary save_btn" onclick="updateBankDetails();">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    <script src="{{asset('seller-assets/js/sweetalert.min.js')}}"></script>

    <script>
        function updateBankDetails() {

            var formdetails = new FormData($("#bank_details_id")[0]);
            formdetails.append('cancel_cheque', $("#cancel_cheque_id").val())

            $.ajax({
                url: "{{route('seller.update-seller-bank-details')}}",
                type: 'POST',
                data: formdetails,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 200) {
                        Swal.fire("Success", response.msg, "success");
                        setInterval(function () {
                            location.reload(true)
                        }, 1500);
                    }
                },
                error: function (response) {
                    $(document).find('.custom-errors').remove()
                    $.each(response.responseJSON.errors, function (field_name, error) {
                        field_name = field_name.replaceAll(".", "_");
                        $(document).find("input[name*=" + field_name + "]").after('<p class="text-danger custom-errors"> ' + error + '</p>');
                    })
                }
            });
        }

        function toggleDisable (id) {
            if($(`#${id}`).prop('disabled')){
                $(`#${id}`).prop('disabled', false);
            }else{
                $(`#${id}`).prop('disabled', true);
            }
        }

    </script>
@endsection

@extends('seller.layouts.master')

@section('extra-css')
    <!-- Style Profile -->
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/profile.css')}}">
    <link href="{{asset('seller-assets/css/sweetalert.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main_content_lg">
        <div>
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
        </div>
        <div>
            <div class="" id="profile_main">
                <div class="profile_main_lable">
                    <div class="d-flex align-items-center justify-content-end">
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
                            <li class="p-2 pb-3 ">
                                <a class="" href="{{route('seller.profile.bank-details')}}">Bank Details</a></li>
                            <li class="p-2 pb-3 border_profile_menu_active">
                                <a class="" href="{{route('seller.profile.change-password')}}">Password</a></li>
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
                                <img src={{ asset('sellerProfile/' . $authUser->profile_avatar) }} class="img-fluid" alt="">
                            </div>
                            <h3 class="text-center pt-4  pb-4 sub_title_profile">{{auth()->user()->company_name}}</h3>
                            <div class="d-flex justify-content-center justify-content-md-start justify-content-sm-start">
                            </div>
                        </div>
                    </div>

                </aside>
                <aside class="w-100 mx-5" id="basic_main">
                    <div class="">
                        <h3 class="basic_info_profile pt-5 pb-3 px-3">Password Details</h3>
                        <div>
                            <form class="Basic_form" id="account_password_form_id">
                                @CSRF
                                <div class="my-2">
                                    <label class="form-label">Old Password</label><input type="password" name="old_password" value="{{old('old_password')}}" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="new_password" value="{{old('new_password')}}" class="form-control">
                                </div>
                                <div class="my-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="new_confirm_password" value="{{old('new_confirm_password')}}" class="form-control">
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button"
                                            class="btn btn-outline-secondary save_btn" id="update-password">SAVE
                                    </button>
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
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{asset('seller-assets/js/sweetalert.min.js')}}"></script>

    <script>
        $("#update-password").on('click', function (e) {
            e.preventDefault();

            let formData = new FormData($("#account_password_form_id")[0]);

            $.ajax({
                url: '{{route('seller.change-account-password')}}',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    Swal.fire("Success", response.msg, "success");
                    setInterval(function () {
                        location.reload(true)
                    }, 1500);
                },
                error: function (response) {
                    $(document).find('.custom-errors').remove()
                    $.each(response.responseJSON.errors, function (field_name, error) {
                        field_name = field_name.replaceAll(".", "_");
                        $(document).find("input[name*=" + field_name + "]").after('<p class="text-danger custom-errors"> ' + error + '</p>');
                    })
                }
            });
        });
    </script>
@endsection

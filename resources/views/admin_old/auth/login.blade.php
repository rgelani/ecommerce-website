@extends('admin.auth.layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('admin-assets/css/sign_in.css')}}">
@endsection

@section('content')
    <body class="sign_in_page">
    <div class="main-wrapper">

        <!-- Sign In Section Start-->
        <div class="common_main_wrap">
            <div class="common_inner_left common_inner">
                <div class="common_logo_and_info">
                    <a href="#0">
                        <img src="{{asset('admin-assets/image/logo.png')}}" alt="logo" class="logo">
                    </a>
                    <div class="welcome_text">
                        <p>Welcome Back</p>
                        <span>Just a couple of clicks and we start</span>
                    </div>
                </div>
            </div>
            <div class="common_inner_right common_inner">
                <div class="sign_in_info">
                    @include('admin.auth.layout.message')
                    <h2 class="cm_title">Sign In</h2>
                    <form action="{{route('admin.admin-login')}}" method="POST" id="admin_login">
                        @CSRF
                        <div class="common_input_wrap">
                            <p class="input_label">Email</p>
                            <input type="email" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="common_input_wrap">
                            <p class="input_label">Password</p>
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <button type="submit" class="cm_btn">Sign In</button>
                    </form>
                    <p class="account_text">Don’t have an account? <a href="{{route('admin.register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
        <!-- Sign In Section End-->

    </div>

    <script src="{{asset('admin-assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#admin_login').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                    },
                    confirm_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password",
                    },
                },
                messages: {
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 5 characters"
                    },
                },
            });
        });
    </script>
    </body>
@endsection

@extends('user.layouts.master')
@section('extra-css')

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" />
<!-- vendore css -->
<link rel="stylesheet" href="{{ asset('user-assets/css/vendor/vendor.min.css') }}">
<!-- owl min css -->
<link rel="stylesheet" href="{{ asset('user-assets/css/owl.carousel.min.css') }}">
<!-- owl theme css -->
<link rel="stylesheet" href="{{ asset('user-assets/css/owl.theme.default.min.css') }}">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('user-assets/css/style.css') }}">

@endsection
@section('content')


</head>

<body>
    <!-- main layout start from here -->


    <!-- Header Area Start  -->

    <!-- Header End -->

    <!-- Menu Content Start -->
    <nav class="main-nav navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav justify-content-between w-100 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grocery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Mobiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fashion <i class="ion-ios-arrow-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Electronics <i class="ion-ios-arrow-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <i class="ion-ios-arrow-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Appliances <i class="ion-ios-arrow-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beauty, Toys & More <i class="ion-ios-arrow-down"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu Content End -->

    <!-- cart area start -->
    <div class="cart-main-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="cart-table-content">
                        <!-- shani -->
                        <div class="tab-pane fadeIn to_animate  in animated fadeInUp mx-auto" id="v-pills-profile"
                            role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="order-list">
                                @if($order->last()->lineItems)
                                <div class="row order-table justify-content-between">
                                    <div class="col-12 col-md-8 col-lg-7 col-md-12">
                                        <div class="d-flex align-items-center ">
                                            <div class="success-icon d-flex align-items-center justify-content-center ">
                                                <img class="img-responsive"
                                                    src="{{ asset('user-assets/image/right.svg') }}" alt="">
                                            </div>
                                            <div class=" success-content">
                                                <h2 class="title">Order placed for &#x20b9;{{
                                                    $order->last()->lineItems->sum('selling_price') }}</h2>
                                                <p>Your 1 item will be delivered by Sun, May 15th ‘22.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 col-lg-4 status cart-quantity col-md-12"
                                        style="margin-top: 4px;">
                                        <div class="my-1">
                                            <h3>Why call? Just click!</h3>
                                            <p>Easily track all your Flipkart orders!</p>
                                            <a class="btn" href="#">Go to My Orders</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="row order-table justify-content-between ptb-30">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div>
                                            <h4>Delivery Address</h4>
                                            <h5 class="pt-12">{{ "
                                                {$order->last()->address->name}" }}</h5>
                                            <p class="pt-20">Add: {{ "{$order->last()->address->address1}
                                                {$order->last()->address->address2} {$order->last()->address->address3}"
                                                }}</p>
                                            <h5 class="pt-20">Phone number</h5>
                                            <p class="pt-12">{{ "{$order->last()->address->phone_no}
                                                {$order->last()->address->alternate_phone_no}" }}</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 offset-lg-1">
                                        <div>
                                            <h4>Delivery Address</h4>
                                            <p class="pt-30">Prefer contactless delivery?</p>
                                            <p class="pt-30">Share order details</p>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 col-md-6 col-lg-3 d-flex justify-content-start flex-column text-center ptb-30">
                                        <a class="btn-outline" href="#">Pay Now</a>
                                        <a class="btn-outline" href="#">Share order</a>
                                    </div>
                                </div>
                                <div class="row order-table justify-content-between ptb-30">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        @foreach ($order->last()->lineItems as $lineItem)

                                        <div>
                                            <h4>{{ $lineItem->title }}</h4>
                                            {{-- <p style="margin-top: 6px;">6 GB RAM</p> --}}
                                            <p class="pt-10">{{$lineItem->discription }}</p>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div>
                                            <h4>Delivery expected by Sun May 15</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div>
                                            <h4 class="d-inline me-4">$10,000</h4>
                                            <p class="success d-inline">3 offers applied</p>
                                        </div>
                                        <ul class="pt-20">
                                            <li class="pt-10" style="color: #FF0000;">Cancel</li>
                                            <li class="pt-20" style="color: #2A4CFF">Need help?</li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->

    <!-- start slider -->
    <div class="owl-carousel owl-theme py-5 px-5 " id="order-slider">
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (1).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (2).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (3).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (4).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (5).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
        <div class="item px-4">
            <div class="order-single-main text-center">
                <div class="order-image ">
                    <img src="user-assets/images/slider (4).png" alt="" class=" img-responsive ">
                </div>
                <div class="order-info py-4">
                    <h2>Musical Amplifiers</h2>
                    <h3>Upto 50% off</h3>
                    <p>By Mixars</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->

    @endsection

    @section('extra-js')
    <!--jquery library -->
    <script src="{{ asset('user-assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Scripts to be loaded  -->
    <script src="{{ asset('user-assets/js/vendor/vendor.min.js') }}"></script>
    <!-- owlcarousel min  -->
    <script src="{{ asset('user-assets/js/owl.carousel.min.js') }}"></script>
    <!-- Main Activation JS -->
    <script src="{{ asset('user-assets/js/custom.js') }}"></script>

    @endsection

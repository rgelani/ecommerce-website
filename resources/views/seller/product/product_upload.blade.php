@extends('seller.layouts.master')

@section('extra-css')
<!-- product upload -->
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/product_upload.css')}}" />
<style>
    div.main_content_lg{
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
    }
    /* .main_content_lg{
        background-image: url("{{asset('seller-assets/image/cancle/waw_shape_model.png')}}");
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: contain;
    } */
    /* .btn-theme-gradient{
        background: linear-gradient(99.54deg, rgba(162, 205, 184, 0.65) 7.46%, rgba(77, 124, 115, 0.65) 95.68%);
        border-radius: 12px;
        border: hidden;
        text-decoration: none;
        padding: 5px 30px;
        color: black;
    }
    .btn-theme-gradient:hover{
        color: white;
    }
    .height-350 {
        height: 350px;
    }
    .bg-c4{
        background: #c4c4c4;
    }
    .bg-theme-grey{
        background: #f5f3f3
    }
    .carousel > .carousel-indicators > li {
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background: #c4c4c4;
    }
    .carousel > .carousel-indicators > li.active {
        background: #787878;
    } */
</style>
@endsection

@section('content')
<div class="main_content_lg" id="product_upload">
        <div class="product_upload_wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-12 right_border_product_upload">
                    <div class="single_listing_upload_main">
                        <div class="">
                            <a class="btn" href="{{ route('seller.product.index') }}">Single Listing</a>
                            <!-- <div class="singleListing-slider"> -->
                              <div class="signle-product-box">
                                <!-- <img src="{{asset('seller-assets/image/product_upload/product_upload_items.jpg')}}  " alt=""> -->
                                <div id="carouselSingleListing" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselSingleListing" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselSingleListing" data-slide-to="1"></li>
                                        <li data-target="#carouselSingleListing" data-slide-to="2"></li>
                                        <li data-target="#carouselSingleListing" data-slide-to="3"></li>
                                        <li data-target="#carouselSingleListing" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>  
                            </div>
                              <!-- <div class=" m-3">
                                <img src="assets/image/product_upload/product_upload_items.jpg" alt="">
                              </div>
                              <div class=" m-3">
                                <img src="assets/image/product_upload/product_upload_items.jpg" alt="">
                              </div> -->
                            <!-- </div> -->
                            <div class="how_to_upload_main">
                                <div class="you_tube_box">
                                    <img src="{{asset('seller-assets/image/product_upload/you_tube_product_upload.png')}}" alt="">
                                </div>
                                <div class="how_do_description">
                                  How To  Do Single Listing
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-6 col-md-12 left_border_product_upload">
                    <div class="single_listing_upload_main">
                        <div class="">
                            <a class="btn" href="{{ route('seller.product.bluk_product') }}">Bluk Listing</a>
                            <div class="slider_img_upload">
                              <!-- <img src="{{asset('seller-assets/image/product_upload/product_upload_items.jpg')}}" alt=""> -->
                              <div id="carouselBulkListing" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselBulkListing" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselBulkListing" data-slide-to="1"></li>
                                        <li data-target="#carouselBulkListing" data-slide-to="2"></li>
                                        <li data-target="#carouselBulkListing" data-slide-to="3"></li>
                                        <li data-target="#carouselBulkListing" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('seller-assets/image/product_view/product_big_img.png')}}" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="how_to_upload_main">
                                <div class="you_tube_box">
                                    <img src="{{asset('seller-assets/image/product_upload/you_tube_product_upload.png')}}" alt="">
                                </div>
                                <div class="how_do_description">
                                  How To  Do Bulk Listing
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>      
        <div class="product_back_bottom_img">
            <img src="{{asset('seller-assets/image/product_upload/product_upload_wave.png')}}" alt="">
        </div>
</div>
@endsection

@section('extra-script')
<script>console.log("hey from product upload")</script>
@endsection
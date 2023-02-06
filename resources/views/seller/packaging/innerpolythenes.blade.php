<<<<<<< HEAD
@extends('seller.layouts.master')

@section('extra-css')
<!-- || Notice || -->
<!-- {this link use in cancle page because some class is use in cancle} -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/order.css') }}">

<!-- || Notice || -->
<!-- {this link use in cancle page because some class is use in cancle} -->
<!-- cancle Sheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/cancle.css') }}">

<!-- wallet pie chart css -->
<link rel="stylesheet" href="{{ asset('seller-assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/packaging.css') }}">
@endsection

@section('content')
<div class="main_content_lg" id="payment">
    <div class="top_payment_header_main">
        <div class="">
            <ul class="payment_heading">
                <li><a class="btn1 packing_header active1" href="{{route('seller.packaging.index')}}">Main Box</a></li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.innerpolythene')}}">Inner Polythene</a> </li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.mainpolythene')}}">Main polythene</a> </li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.safetycover')}}">Safety cover</a></li>
            </ul>
        </div>
    </div>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last payment</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font-Awesome Fonts -->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="packaging.css">
</head>

<body class="product_view_page">
>>>>>>> e38f1d251a3db26f32d71c37e5ffcedb1996dd64

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 packaging_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="packaging_header">SIZE OF BOX:20*20</h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('seller-assets/image/packaging_img/packeging 1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="button" data-toggle="modal" data-target="#exampleModal">Buy
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 packaging_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="packaging_header">SIZE OF BOX:20*20</h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('seller-assets/image/packaging_img/packege size 1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="button" data-toggle="modal" data-target="#exampleModal">Buy
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 packaging_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="packaging_header">SIZE OF BOX:20*20</h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('seller-assets/image/packaging_img/images (1) 1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="button" data-toggle="modal" data-target="#exampleModal">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-3 packaging_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="packaging_header">SIZE OF BOX:20*20</h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('seller-assets/image/packaging_img/images (3) 1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="button" data-toggle="modal" data-target="#exampleModal">Buy
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 packaging_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="packaging_header">SIZE OF BOX:20*20</h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('seller-assets/image/packaging_img/images 1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.YUISDFGHJ4XEDCRFTVGYBHUESXDCRFTVGYBHUNJEDRFTVGYBHUNESXDCRFTVGYBHUNEDSRCFTVGYBHDRCFTVGYBHUJCDRFTVGYBHUNCDRFTVGBHDXCRFTVGBYHDCFRTVGYBHUNJCFDRTVGYBHFDCRTVGBYHSXDCFVGB.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="button" data-toggle="modal" data-target="#exampleModal">Buy
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Information</h5>
                <span class="span1" data-dismiss="modal">&times;</span>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <label for="size" class="mt-3">Size</label>
                            <input type="number" name="size" class="modal-input form-control">
                        </div>
                        <div class="col-lg-3 text-center">
                            <label for="size" class="mt-3">Quantity</label>
                            <input type="number" name="size" class="modal-input form-control">
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4 text-center">
                            <label for="size" class="mt-3">Amount</label>
                            <input type="number" name="size" class="modal-input form-control">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary">Add To Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>

@endsection
@extends('seller.layouts.master')

@section('extra-css')
<<<<<<< HEAD
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
=======
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('seller-assets/css/bootstrap.min.css')}}">

     <!-- Style Sheet -->
     <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('seller-assets/css/packeging_metiriyal.css')}}">
     @endsection
     @section('content')
     <!-- Main Content Start -->
    <div class="main_content_lg paeging-metirial-height packeging-page-height">
        <div class="py-2">
            <div class="main_pakaging"> 
                <div class="pb-2">
                    <ul class="pakeging_heading">
                        <li><a class="active_border" href="{{route('seller.packaging.index')}}">Inner Box</a></li>
                        <li><a class="" href="{{route('seller.packaging.innerpolythene')}}">Inner polythene</a> </li>
                        <li><a class="" href="{{route('seller.packaging.mainpolythene')}}">Main polythene</a> </li>
                        <li><a href="{{route('seller.packaging.safetycover')}}">Safty cover</a></li>
                    </ul>
                </div>
            </div>
            <div class="packeging-body">
                <div class="packeging-box">
                    <div class="packeging-single-box">
                        <h6>SIZE OF BOX:20*20</h6>
                        <div class="packeging-content d-flex w-100">
                            <p class="">YUIS DFGHJ 4XEDCRF TVG YBHU ESX DCR FTVGY BHUN JEDR FTVGYBH UNESXDC RFTVGYB HUNEDS RCFT VGY BHD RCF TVG YBHU JCDR FTVG YBHUN CDRFT VGBHD XCRF TVG BYHD CFRT VGY BHU NJCFDRT VYB HFDC RTVGB YHS XD CFVGB.</p>
                            <div class="">
                                <img src="{{asset('seller-assets/image/packeging_metiriyal/First-box.png')}}" alt="">
                            </div>
                        </div>
                        <p>YUISD FGHJ4X EDCRFTVGYBHUESX DCRFTVGYBHUNJEDR FTVGYBHUNESXDCRFTVGY BHUNEDS RCFTVG YBHDRCF TVGYBHUJ CDRFTVGY BHUNCDRF TVGBHDXC RFTVGBYH DCFRTVGY BHUNJCFD RTVGYBHF DCRTVGB YHSXDCFVGB.YUIS DFGHJ4 XEDCRFTVGY BHUESXDCRFT VGYBHUNJED RFTVGYBHUN  </p>
                        <div class="  text-end ">
                            <button class="singlePackeging-buy-btn">BUY NOW</button>
                        </div>
                    </div>
                    <div class="packeging-single-box">
                        <h6>SIZE OF BOX:20*20</h6>
                        <div class="packeging-content d-flex w-100">
                            <p class="w-50">YUIS DFGHJ 4XEDCRF TVG YBHU ESX DCR FTVGY BHUN JEDR FTVGYBH UNESXDC RFTVGYB HUNEDS RCFT VGY BHD RCF TVG YBHU JCDR FTVG YBHUN CDRFT VGBHD XCRF TVG BYHD CFRT VGY BHU NJCFDRT VYB HFDC RTVGB YHS XD CFVGB.</p>
                            <div class="w-50">
                                <img src="{{asset('seller-assets/image/packeging_metiriyal/second-box.png')}}" alt="">
                            </div>
                        </div>
                        <p>YUISD FGHJ4X EDCRFTVGYBHUESX DCRFTVGYBHUNJEDR FTVGYBHUNESXDCRFTVGY BHUNEDS RCFTVG YBHDRCF TVGYBHUJ CDRFTVGY BHUNCDRF TVGBHDXC RFTVGBYH DCFRTVGY BHUNJCFD RTVGYBHF DCRTVGB YHSXDCFVGB.YUIS DFGHJ4 XEDCRFTVGY BHUESXDCRFT VGYBHUNJED RFTVGYBHUN  </p>
                        <div class="  text-end ">
                            <button class="singlePackeging-buy-btn">BUY NOW</button>
                        </div>
                    </div>
                    <div class="packeging-single-box">
                        <h6>SIZE OF BOX:20*20</h6>
                        <div class="packeging-content d-flex w-100">
                            <p class="w-50">YUIS DFGHJ 4XEDCRF TVG YBHU ESX DCR FTVGY BHUN JEDR FTVGYBH UNESXDC RFTVGYB HUNEDS RCFT VGY BHD RCF TVG YBHU JCDR FTVG YBHUN CDRFT VGBHD XCRF TVG BYHD CFRT VGY BHU NJCFDRT VYB HFDC RTVGB YHS XD CFVGB.</p>
                            <div class="w-50">
                                <img src="{{asset('seller-assets/image/packeging_metiriyal/third-box.png')}}" alt="">
                            </div>
                        </div>
                        <p>YUISD FGHJ4X EDCRFTVGYBHUESX DCRFTVGYBHUNJEDR FTVGYBHUNESXDCRFTVGY BHUNEDS RCFTVG YBHDRCF TVGYBHUJ CDRFTVGY BHUNCDRF TVGBHDXC RFTVGBYH DCFRTVGY BHUNJCFD RTVGYBHF DCRTVGB YHSXDCFVGB.YUIS DFGHJ4 XEDCRFTVGY BHUESXDCRFT VGYBHUNJED RFTVGYBHUN </p>
                        <div class="  text-end ">
                            <button class="singlePackeging-buy-btn">BUY NOW</button>
                        </div>
                    </div>
                    <div class="packeging-single-box">
                        <h6>SIZE OF BOX:20*20</h6>
                        <div class="packeging-content d-flex w-100">
                            <p class="w-50">YUIS DFGHJ 4XEDCRF TVG YBHU ESX DCR FTVGY BHUN JEDR FTVGYBH UNESXDC RFTVGYB HUNEDS RCFT VGY BHD RCF TVG YBHU JCDR FTVG YBHUN CDRFT VGBHD XCRF TVG BYHD CFRT VGY BHU NJCFDRT VYB HFDC RTVGB YHS XD CFVGB.</p>
                            <div class="w-50">
                                <img src="{{asset('seller-assets/image/packeging_metiriyal/forth-box.png')}}" alt="">
                            </div>
                        </div>
                        <p>YUISD FGHJ4X EDCRFTVGYBHUESX DCRFTVGYBHUNJEDR FTVGYBHUNESXDCRFTVGY BHUNEDS RCFTVG YBHDRCF TVGYBHUJ CDRFTVGY BHUNCDRF TVGBHDXC RFTVGBYH DCFRTVGY BHUNJCFD RTVGYBHF DCRTVGB YHSXDCFVGB.YUIS DFGHJ4 XEDCRFTVGY BHUESXDCRFT VGYBHUNJED RFTVGYBHUN  </p>
                        <div class="text-end ">
                            <button class="singlePackeging-buy-btn">BUY NOW</button>
                        </div>
                    </div>
                    <div class="packeging-single-box">
                        <h6>SIZE OF BOX:20*20</h6>
                        <div class="packeging-content d-flex w-100">
                            <p class="w-50">YUIS DFGHJ 4XEDCRF TVG YBHU ESX DCR FTVGY BHUN JEDR FTVGYBH UNESXDC RFTVGYB HUNEDS RCFT VGY BHD RCF TVG YBHU JCDR FTVG YBHUN CDRFT VGBHD XCRF TVG BYHD CFRT VGY BHU NJCFDRT VYB HFDC RTVGB YHS XD CFVGB.</p>
                            <div class="w-50">
                                <img src="{{asset('seller-assets/image/packeging_metiriyal/fifth-box.png')}}" alt="">
                            </div>
                        </div>
                        <p>YUISD FGHJ4X EDCRFTVGYBHUESX DCRFTVGYBHUNJEDR FTVGYBHUNESXDCRFTVGY BHUNEDS RCFTVG YBHDRCF TVGYBHUJ CDRFTVGY BHUNCDRF TVGBHDXC RFTVGBYH DCFRTVGY BHUNJCFD RTVGYBHF DCRTVGB YHSXDCFVGB.YUIS DFGHJ4 XEDCRFTVGY BHUESXDCRFT VGYBHUNJED RFTVGYBHUN </p>
                        <div class="  text-end ">
                            <button class="singlePackeging-buy-btn">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="last-packeging-btn text-end m-4">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop">BUY NOW</button>
                </div>
                <!-- Scrollable modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header d-flex pb-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body packeging-modal">
                                    <div class="modal-main-title">
                                        <h4 class="pkj-sub-t">packeging information</h4>
                                    </div>
                                    <div class="size-qty-main  d-flex justify-content-between">
                                        <div class="d-flex size-let-col">
                                            <div class="size ">
                                                <h4 class="pkj-sub-t">size</h4>
                                                <div class="sqr-box">
                                                    <div>20*20</div>
                                                    <div>20*20</div>
                                                    <div>20*20</div>
                                                </div>
                                            </div>
                                            <div class="qty ">
                                                <h4 class="pkj-sub-t">Quantity</h4>
                                                <div class="sqr-box">
                                                    <div>10</div>
                                                    <div>10</div>
                                                    <div>10</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="size">
                                                <h4 class="pkj-sub-t">Amount</h4>
                                                <div class="sqr-box">
                                                    <div>200</div>
                                                    <div>200</div>
                                                    <div>200</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gst-ammount text-end    ">
                                        <div class="gst tax-coman sqr-box tax">
                                            <h4 class="pkj-sub-t">GST:-</h4>
                                            <div>200</div>
                                        </div>
                                        <div class="amount tax-coman sqr-box tax">
                                            <h4 class="pkj-sub-t">Total Amount:-</h4>
                                            <div>900</div>
                                        </div>
                                    </div>
                                    <div class="delevery-to align-items-center d-flex mt-2"> 
                                        <span class="pkj-sub-t ">Delivery to:-</span>
                                        <textarea name="Delivery" id="" class="ms-4" cols="60" rows="3"></textarea>
                                    </div>
                                    <div class="last-packeging-btn text-end m-4 me-0">
                                        <button data-bs-toggle="modal" data-bs-target="#staticBackdrop">BUY NOW</button>
                                    </div>
                                </div>
                            </div>  
                        </div>
>>>>>>> e38f1d251a3db26f32d71c37e5ffcedb1996dd64
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
@endsection
>>>>>>> e38f1d251a3db26f32d71c37e5ffcedb1996dd64

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

<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> -->

<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
<<<<<<< HEAD
=======
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script>
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn1");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName(" active");
                current[0].className = current[0].className.replace("active", "");
                this.className += " active";
            });
        }
>>>>>>> e38f1d251a3db26f32d71c37e5ffcedb1996dd64

@endsection
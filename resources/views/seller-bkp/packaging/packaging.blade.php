@extends('seller.layouts.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/packaging.css') }}">
@endsection

@section('content')
<div class="main_content_lg" id="payment">
    <div class="top_payment_header_main">
        <div class="">
            <ul class="payment_heading">
                <li><a class="btn1 packing_header active1" href="{{route('seller.packaging.index')}}">Main Box</a></li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.innerpolythene')}}">Inner
                        Polythene</a> </li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.mainpolythene')}}">Main polythene</a>
                </li>
                <li><a class="btn1 packing_header" href="{{route('seller.packaging.safetycover')}}">Safety cover</a>
                </li>
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
                        <img src="{{ asset('seller-assets/image/packaging/images 1.png') }}" alt="">
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
                        <img src="{{ asset('seller-assets/image/packaging/images 1.png') }}" alt="">
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
                        <img src="{{ asset('seller-assets/image/packaging/images 1.png') }}" alt="">
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
                        <img src="{{ asset('seller-assets/image/packaging/images 1.png') }}" alt="">
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
                        <img src="{{ asset('seller-assets/image/packaging/images 1.png') }}" alt="">
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

    <div class="container-fluid" style="text-align: end;">
        <div class="row">
            <div class="col-lg-12">
                <button class="buyall_packaging" data-toggle="modal" data-target="#exampleModalall">Buy Now</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
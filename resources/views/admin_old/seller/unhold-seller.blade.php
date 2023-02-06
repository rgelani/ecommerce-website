@extends('admin.layouts.master')
@section('extra-css')
<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')


<!--start rating section -->
<div class="product_view_rating">
    <!-- strat product listing main -->

    <!-- Start seller profile -->
    <div class="seller_profile_main">
        <!-- strat product section-1 -->
        <div class="product_section_main px-2">

            <div class="row py-3">
                <div class="col-xl-3  col-md-6 col-sm-12">
                    <div class="item product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>Totel Product</p>
                            <h2>56</h2>
                            <p>Quality</p>
                        </div>
                        <div class="product_box_icon">
                            <img src="image/total+product.png" alt="total-produc">
                            <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
                    <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>Totel Product</p>
                            <h2>56</h2>
                            <p>Quality</p>
                        </div>
                        <div class="product_box_icon">
                            <img src="image/pandding_product.png" alt="total-produc">
                            <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
                    <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>Totel Product</p>
                            <h2>56</h2>
                            <p>Quality</p>
                        </div>
                        <div class="product_box_icon">
                            <img src="image/pass+product.png" alt="total-produc">
                            <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                        </div>
                    </div>
                </div>
            </div>


            <!-- start serch and category -->

            <div class="d-flex  py-5 justify-content-between">
                <div class="w-25 justify-content-start">
                    <div class="input-group">
                        <input type="text" class="form-control pl-0 border-left-0 " name="search"
                            placeholder="Seller_Id or Email or Mobile" aria-label="Seller_Id or Email or Mobile">
                    </div>
                </div>
                <div class="d-flex ps-3">
                    <div class="dropdown dropdown_single_product me-2">
                        <div class="multiSelect">
                            <select multiple class="multiSelect_field" data-placeholder="State" name="states[]"
                                id="states">
                                @foreach($states as $state)
                                <option class="dropdown-item" value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                <div class="category_select_arrow">
                                    <img>
                                </div>
                            </select>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                <g stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </g>
                            </symbol>
                        </svg>
                    </div>
                    <div class="dropdown dropdown_single_product me-2">
                        <div class="multiSelect">
                            <select multiple class="multiSelect_field" data-placeholder="City" name="cities[]"
                                multiple="multiple" id="cities">
                                @foreach($cities as $city)
                                <option class="dropdown-item" value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                <g stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </g>
                            </symbol>
                        </svg>
                    </div>
                    <div class="dropdown dropdown_single_product me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                <g stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </g>
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>
            <!--end rating section -->
            <!-- start seller box -->
            <div id="render-seller-list" class="saller_main  row">
                @include('admin.seller.unhold-render-list')
            </div>
            <!-- end seller box -->
        </div>
        <!-- end product section-1 -->
    </div>
    <!-- End profile -->
</div>

@endsection
@section('extra-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('.single_un_hold_seller').click(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.seller-un-hold') }}',
                data: {
                    id: $(this).data('id'),
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    console.log('success')
                    window.location.reload();
                }
            });
        });

        $('.multiple_un_hold_seller').click(function (e) {
            e.preventDefault();
            var ids = [];
            $.each($("input[name='seller_un_hold']:checked"), function () {
                ids.push($(this).val());
            });
            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.seller-un-hold') }}',
                data: {
                    ids: ids,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    window.location.reload();
                }
            });
        });
        $('input[name=search]').keyup(function (e) {
            var states_ids = $('#states').val();
            var cities_ids = $('#cities').val();
            var search = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.account-search') }}',
                data: {
                    states: states_ids,
                    cities: cities_ids,
                    status : {{ $status }},
                    search : search,
                    page:'unhold-render-list',
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#render-seller-list').empty().html(response)
                },
                error: function (response){
                    swal()
                }
            });
        });
        $(document).ready(function () {
            $(".multiSelect_field").select2();
        });

        $(document).ready(function () {
            $(".multiSelect_field").select2();
        });

        $('#cities,#states').on('change', function () {
            var states_ids = $('#states').val();
            var cities_ids = $('#cities').val();
            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.account-search') }}',
                data: {
                    states: states_ids,
                    cities: cities_ids,
                    status : {{ $status }},
                    page:'unhold-render-list',
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#render-seller-list').empty().html(response)
                },
                error: function (response){
                    swal()
                }
            });
        });

</script>
@endsection

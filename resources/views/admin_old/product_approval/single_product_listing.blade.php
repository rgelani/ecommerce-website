@extends('admin.layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('admin-assets/css/productview.css') }}">
@endsection

@section('content')
        <!--start product listing  -->
        <div class="product_view" style="height: 1000px;">
            <div class="q_c_pricing">
                <ul class="p-0 q_c_pricing_main mb-5">
                    <a href="{{ route('admin.product_approval.index') }}">
                        <li class=" d-inline pricing_border">
                            Q/C Pendding <span class="yellow_pricing">48</span>
                        </li>
                    </a>
                    <a href="{{ route('admin.product_approval.qcProcess') }}">
                        <li class="d-inline">
                            Q/C Process<span class="yellow_pricing yellow_pricing_2">38</span>
                        </li>
                    </a>
                    <a href="{{ route('admin.product_approval.qcPass') }}">
                        <li class="d-inline">
                            Q/C Pass<span class="yellow_pricing yellow_pricing_2">38</span>
                        </li>
                    </a>
                    <a href="{{ route('admin.product_approval.qcError') }}">
                        <li class="d-inline">
                            Q/C Error<span class="yellow_pricing yellow_pricing_2">38</span>
                        </li>
                    </a>
                    <a href="{{ route('admin.product_approval.qcFailed') }}">
                        <li class="d-inline qc_failed">
                            Q/C Failed<span class="yellow_pricing yellow_pricing_2">38</span>
                        </li>
                    </a>
                </ul>
            </div>

            <div class="single_pro_listing">
                <ul class="d-flex px-0">
                    <a class="fs-7 single_product_title border_title" href="single-product-listing.html">
                        Single product Listing
                        <span class="yellow_pricing">48</span>
                    </a>
                    <a class="fs-7 d-inline single_product_title " href="bulk_product_approval.html">
                        Bulk Product Listing<span class="yellow_pricing_2 yellow_pricing">4868</span>
                    </a>
                </ul>
            </div>

            <!--start search boxend prduct count -->

            <!--start search boxend prduct count -->

            <!-- strat product listing main -->
            <div class="search_and_table_wrap">
                <form method="POST" id="move_to_process">
                    @csrf
                    {!! $dataTable->table() !!}
                    <button type="submit" class="move_process_btn btn btn-success m-3" style="float: right">Move to
                        process</button>
                </form>
            </div>
            <!-- end product listing main -->

            <!-- strat right coreber button -->

            <!-- end right coreber button -->
        </div>
        <!--start product listing  -->
@endsection

@section('extra-js')
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    {!! $dataTable->scripts() !!}
    <script>
        $(document).ready(function() {
            $('.dataTables_filter').addClass('search_input_wrap');
            $('.checkbox-action').html(`<label class='checkbox bounce'>
                <input type='checkbox' class='checkbox' id="allCheck" />
                <svg viewBox='0 0 21 21'>
                     <polyline points='5 10.75 8.5 14.25 16 6'>
                     </polyline>
                </svg>
           </label>`);
            $('#allCheck').change(function(e) {
                e.preventDefault();
                if ($('#allCheck').is(':checked'))
                    $('.product_checkbox').prop('checked', true);
                else
                    $('.product_checkbox').prop('checked', false);

            });

            $('#move_to_process').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: '{{ route('admin.product_approval.qcPendingToProgress') }}',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        LaravelDataTables["qcpendding-table"].ajax.reload();

                    }
                });
            });
        });
    </script>
@endsection

@extends('admin.layouts.master')

@section('content')
    <!-- start Q/C page -->
    <div class="product_view">

        <!-- start Q/C menu -->
        <div class="q_c_pricing">
            <ul class="p-0 q_c_pricing_main mb-5">
                <a href="{{ route('admin.product_approval.index') }}">
                    <li class=" d-inline ">
                        Q/C Pendding <span class="yellow_pricing yellow_pricing_2">48</span>
                    </li>
                </a>
                <a href="{{ route('admin.product_approval.qcProcess') }}">
                    <li class="d-inline pricing_border">
                        Q/C Process<span class="yellow_pricing ">38</span>
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
        <!-- end Q/C menu -->
        <form method="POST" id="qc_process">
        @csrf
        <!--start search box product count -->
            <div class="search_and_single_product_main d-flex align-items-center justify-content-between">
                <div class="single_pro_listing">
                    <ul class="d-flex px-0">
                        <a class="fs-7 single_product_title border_title" href="qc_process.html">
                            Single product Listing
                            <span class="yellow_pricing ">48</span>
                        </a>
                        <a class="fs-7 d-inline single_product_title " href="bulk_qc_process.html">
                            Bulk Product Listing<span class=" yellow_pricing  yellow_pricing_2">4868</span>
                        </a>
                    </ul>
                </div>
                <div class="search_box_2 d-flex align-items-center justify-content-between ">
                    <div class="bgc">
                        <div class="search d-inline mx-2">
                            <img src="{{ asset('image/search_icon.png') }}" alt="" />
                        </div>
                        <input type="text" class="d-inline" placeholder="Search your Category" />
                        <img src="{{ asset('assets/image/dropdown_icon.png') }}" alt="" class="d-inline mx-3 ps-5" />
                    </div>

                </div>
            </div>
            <!--end search boxend prduct count -->

            <p class="out_of_text fs-6 mb-0 me-3 text-end">Result {{ $products->perPage() }} out of
                {{ $products->total() }}</p>

            <!-- start Q/C product  -->
            <div class="scrollbar scroll_aproova Qc_process_scroll" id="style-2">
                <div class="q_c_process_main d-flex justify-content-around mt-4 qc_process_all_product_main row">

                    @foreach ($products as $product)
                        <div class="d-felx product_qc_main justify-content-center align-items-center col-3">
                            <div class="d-flex">
                                <div data-current="0">

                                    @foreach (explode(',', $product->productImage->src) as $key => $image)
                                        @if ($image)
                                            <div
                                                class="mySlides_{{ $product->id }} {{ $key !== 0 ? 'd-none' : '' }}">
                                                <img src="{{ asset('storage/product/' . $image) }}" alt="img-fluid"
                                                     height="200px" width="200px" style="padding: 10px">
                                            </div>
                                        @endif
                                    @endforeach
                                    <ul class="d-flex justify-content-between ps-0 mb-0 align-items-center mx-4">
                                        <li class="q_c_arrow" onclick="plusSlides(-1, {{ $product->id }})"><img
                                                src="{{ asset('assets/image/qc_process_arrow_left.png') }}"
                                                class="img-fluid prev" data-right=""></li>
                                        <li class="q_c_arrow" onclick="plusSlides(1, {{ $product->id }})"><img
                                                src="{{ asset('assets/image/qc_process_arrow_right.png') }}"
                                                class="img-fluid next" data-left=""></li>
                                    </ul>

                                </div>
                                <div class="product_qc_info">
                                    <div class="justify-content-between d-flex">
                                        <div>
                                            <p class="product_id_q_c_page mb-0 d-inline">
                                                Product_id
                                                :</p>
                                            <span class="mb-0">{{ $product->id }}</span>
                                        </div>
                                        <label class="checkbox bounce">
                                            <input type="checkbox" class="product_checkbox" name="product_checkbox[]"
                                                   value="{{ $product->id }}" />
                                            <svg viewBox="0 0 21 21">
                                                <polyline points="5 10.75 8.5 14.25 16 6">
                                                </polyline>
                                            </svg>
                                        </label>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">Category:-
                                        </p>
                                        <span class="mb-0">Men’s t-shirt</span>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">sub
                                                                                     category:- </p>
                                        <span class="mb-0">Men’s t-shirt</span>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">sub
                                                                                     category_1:- </p>
                                        <span class="mb-0">Men’s t-shirt</span>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">Title
                                                                                     description:-</p>
                                        <span class="mb-0 q_c_description">{{ $product->title }}</span>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">MRP:-</p>
                                        <span
                                            class="mb-0 q_c_pricecolor">₹{{ number_format($product->MRP, 2) }}</span>
                                    </div>
                                    <div>
                                        <p class="product_id_q_c_page mb-0 d-inline">iKart
                                                                                     price:-
                                        </p>
                                        <span
                                            class="mb-0 q_c_pricecolor">₹{{ number_format($product->selling_price, 2) }}</span>
                                    </div>
                                    <div>
                                        @if ($product->variants->count())
                                            <p class="mb-0 d-inline ">color</p>
                                            <ul class="d-flex q_c_color_main ps-0 mb-0">
                                                @foreach ($product->variants as $variant)
                                                    <li class="qc_color_boc1"
                                                        style="background: {{ $variant->color }}"></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        @if ($product->variants->count())
                                            <p class="mb-0 d-inline ">Size</p>
                                            <ul class="d-flex q_c_size_main ps-0 mb-0">
                                                @foreach (explode(',', $product->variants->implode(',')) as $size)
                                                    <li class="qc_size">{{ $size }}</li>
                                                @endforeach

                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end Q/C product  -->

            <!-- strat right corener button -->
            <div class="pagination_and_button d-flex justify-content-between mt-5  align-items-center">
                <nav aria-label="Page navigation example w-50 mb-0">
                    <ul class="custom-pagination pagination-secondary pagination align-items-stretch">
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->previousPageUrl() }}"
                               aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>
                        {{-- <li class="page-item"><span class="page-link">1</span></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li> --}}
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="qc_page_end_button d-flex justify-content-end">
                    <div class=" qc_pass_button p-2 last_btn">
                        <button class="text-white btn qc_status" data-status="3">Q/C Pass</button>
                    </div>
                    <div class=" qc_error_button p-2 ">
                        <button class="text-white btn qc_status" data-status="4">Q/C Error</button>
                    </div>
                    <div class="qc_faild_button p-2 ">
                        <button class=" text-white btn qc_status" data-status="5">Q/C Failed</button>
                    </div>
                </div>
            </div>
            <!-- end right coreber button -->
        </form>

    </div>
    <!-- end Q/C page -->
@endsection

@section('page_js')
    <script>
        $('.qc_status').click(function (e) {
            e.preventDefault();
            var fD = new FormData($('#qc_process')[0]);
            fD.append('status', $(this).data('status'));
            $.ajax({
                type: "post",
                url: '{{ route('admin.product_approval.qcProcess.submit') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: fD,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function (response) {
                    location.reload();

                }
            });

        });
    </script>
    <script>
        function plusSlides(data, id) {
            const current = parseInt($(`.mySlides_${id}`).parent().data('current')) + parseInt(data);
            if (current >= 0) {
                $(`.mySlides_${id}`).each(function (i, obj) {
                    if (i == current) {
                        $(`.mySlides_${id}`).addClass('d-none');
                        $(this).removeClass('d-none');
                        $(`.mySlides_${id}`).parent().data('current', current);
                    }
                });
            }

        }
    </script>
@endsection

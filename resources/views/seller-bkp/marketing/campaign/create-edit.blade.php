@extends('seller.layouts.master')

@section('extra-css')
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/style.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/create_new_camping.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('seller-assets/css/marketing.css') }}">
<link rel="stylesheet" href="{{ asset('seller-assets/css/manually_camping.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/Datetime-picker/css/bootstrap-datetimepicker.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/Datetime-picker/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('content')
<form action="#" method="POST" id="campaignForm">
    <div class="create_new_camping_side_main py-2">
        <div class="right_side_new_camping">
            <div class="table_wrap_marketing pb-2">
                <div class="">
                    <div class="w-100 d-flex flex-wrap">
                        <div>
                            <div class="left_side_new_camping">
                                @if (@$campaign->id)
                                <input type="hidden" name="id" value="{{ $campaign->id }}">
                                @endif

                                <h2 class="create_new_title text-dark">Create New Campaign</h2>
                            </div>
                            <div class=" pt-5">
                                <p class="enter_capaning_name text-dark">Enter Campaign Name</p>

                                <div class="d-inline">
                                    <input type="text" class="camping_name_box" name="name" id="name" placeholder="Campaign Name" @if (@$campaign->name) value="{{ $campaign->name }}"
                                    {{ $editable ? 'readonly' : '' }} @endif>
                                </div>

                                <p class="select_product_title text-dark">Select Product for Ad's
                                </p>


                                <p class="text-dark fs-5 manuallu_left_txt" style="margin-top:48px;">Manually select Product</p>
                                <a href="#" class="select_btn" data-bs-toggle="modal" id="product" data-bs-target="#exampleModal_3">Select</a>
                                <p class="select_any_title text-dark">Select any of your live Products.
                                </p>


                                <p class="text-dark manually_select_marketing" style="margin-top:48px;">Campaign
                                    Budget</p>
                                <p class="text-dark mt-2 manually_select_marketing">I want to
                                    spend<span class="star_create_new_camping">*</span></p>
                                <ul class="date_main">
                                    <li>
                                        <p class="daily_input ">
                                            <input type="radio" id="test1" name="type" value="0" checked="" {{ @$campaign->type == 0 ? 'checked' : '' }} {{ @$editable ? 'disabled' : '' }}>
                                            <label for="test1" class="date_pic">&nbsp;&nbsp;
                                                Daily</label>
                                        </p>
                                    </li>
                                    <li>
                                        <p class=" daily_input ">
                                            <input type="radio" id="test2" name="type" value="1" {{ @$campaign->type == 1 ? 'checked' : '' }} {{ @$editable ? 'disabled' : '' }}>
                                            <label for="test2" class="date_pic">&nbsp;&nbsp;
                                                Total</label>
                                        </p>
                                    </li>

                                </ul>
                                <div class="position-relative mt-3 palyment_amount_main">
                                    <input type="number" name="amount" placeholder="Amount" class="amount_create_new_camping" id="amount" min="250" @if (@$campaign->total_amount) value="{{ $campaign->total_amount }}"
                                    {{ $editable ? 'readonly' : '' }} @endif>
                                    <span class="ruppy_sign">₹</span>
                                </div>
                                <div class="mt-2">
                                    <span class="minimun_amount_camping">*Minimum amount is
                                        ₹250</span>
                                </div>
                                <p class="text-dark mt-2 manually_select_marketing">Select
                                    Campaign Duration
                                <div class="camping_duration_main">

                                    <ul class="date_main">
                                        <li class=" date_btn">
                                            <div class="input-group date" id="startDatePicker" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#startDatePicker" id="start_time" name="start_time" @if (@$campaign->start_time) value="{{ $campaign->start_time }}"
                                                {{ @$editable ? 'readonly' : '' }} @endif />
                                                <div class="input-group-append" data-target="#startDatePicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div> {{-- <a href="#"
                                                class="date_create_new_camping">02/02/2022&nbsp;&nbsp;12:35</a> --}}
                                        </li>
                                        <span>To</span>
                                        <li class="date_btn ">
                                            <div class="input-group date" id="endDataPicker" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#endDatePicker" id="end_time" name="end_time" @if (@$campaign->end_time) value="{{ $campaign->end_time }}" {{ @$editable ? 'readonly' : '' }} @endif />
                                                <div class="input-group-append" data-target="#endDatePicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            {{-- <a href="#" class="">02/02/2022&nbsp;&nbsp;12:35</a></li> --}}
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center justify-content-end mt-3">
                                    <label class="checkbox bounce me-2">
                                        <input type="checkbox" id="no_end_time" name="no_end_time" value="1" @if (@$campaign->no_end_time) {{ @$editable ? 'readonly' : '' }} checked @endif />
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6">
                                            </polyline>
                                        </svg>
                                    </label>
                                    <span class="no_end_date">
                                        NO end Date
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="add_other_product_btn d-flex flex-wrap justify-content-between">
                            @if (@$campaign)
                            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal_3" class="text-dark">Add
                                Onther Product</a>
                            @endif
                            <button class="btn_create_new_bottom_right_btn" id="createAd">
                                Create Ad’s
                            </button>
                        </div>
                        <div class="right_side_new_camping_table w-100">
                            <div class="table_wrap_marketing pb-2">
                                <div class="">
                                    <div>
                                        <table class="marketing_main_table  selected-products">
                                            <thead class="table_heding_marketing">
                                                <tr>
                                                    <th colspan="">product_Id</th>
                                                    <th colspan="">product</th>
                                                    <th colspan="">Catagry</th>
                                                    <th colspan="">Rating</th>
                                                    <th colspan="">Price</th>
                                                    <th colspan="">Stock</th>
                                                    <th colspan="">Cost per click</th>
                                                    <th colspan="">Status</th>
                                                    <th colspan="">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="marketing_body">
                                                @if (@$campaign->products)
                                                @forelse ($campaign->products as $campaignProduct)
                                                <tr id="{{ $campaignProduct->product->id }}" data-rawId="{{ $loop->index }}">
                                                    <td class="sorting_1">
                                                        <span class="d-block text-center">{{ $campaignProduct->product->id }}</span>
                                                    </td>

                                                    <td class="img_create_new_camping">
                                                        <img src="{{ $campaignProduct->product->productImage ? asset('storage/product/' . explode(',', $campaignProduct->product->productImage->src)[0]) : '' }}" height="100" width="100" alt="">
                                                        <span>{{ $campaignProduct->product->title }}</span>
                                                        <input type="hidden" name="product[id][{{ $loop->index }}]" value="{{ $campaignProduct->product->id }}">

                                                    </td>
                                                    <td>Electric</td>
                                                    <td>
                                                        <div class=" ">
                                                            4.2
                                                            <img src="assets/image/create_new_camping/rating_star.png" class="ms-2" alt="">
                                                        </div>
                                                    </td>
                                                    <td>{{ $campaignProduct->product->MRP }}</td>
                                                    <td>{{ $campaignProduct->product->quantity }}</td>
                                                    <td>

                                                        <div class="cpc_box_main">
                                                            <img src="{{ asset('seller-assets/image/create_new_camping/cpc_box.png') }}" class="cpc_img" alt="">
                                                            <span class="ruppy_sign_cpm">&#8377;
                                                                <input type="number" class="d-inline ms-3 cpc" id="product_cpc_{{ $loop->index }}" step="0.01" min="0.25" max="0.90" value="{{ $campaignProduct->cpc }}" name="product[cpc][{{ $loop->index }}]">
                                                            </span>

                                                            <p class="text-start ms-3 mt-1">
                                                                Suggested CPC: ₹0.25
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-toggle">
                                                            <input type="checkbox" data-toggle="toggle" class="status-toggle status" id="product{{ $campaignProduct->product->id }}" {{ $campaignProduct->status ? 'checked' : '' }} value="1" id="product{{ $campaignProduct->product->id }}" name="product[status][{{ $loop->index }}]">
                                                            <label for="switch">Toggle</label>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        @if (!@$editable && count(@$campaign->products) > 1)
                                                        <button type="button" class="btn btn-danger btn-sm removeProduct">Delete</button>
                                                        @endif
                                                        <button type="button" class="btn btn-success btn-sm updateProduct">Save</button>
                                                    </td>
                                                </tr>
                                                @empty
                                                @endforelse
                                                @endif

                                                {{-- <tr>
                                                    <td class=" ps-2">
                                                        <label class="checkbox bounce">
                                                            <input type="checkbox" id="check_box" />
                                                            <svg viewBox="0 0 21 21">
                                                                <polyline points="5 10.75 8.5 14.25 16 6">
                                                                </polyline>
                                                            </svg>
                                                        </label>
                                                    </td>
                                                    <td class="">
                                                        <span class="d-block text-center">12D3421SVAF23633</span>
                                                    </td>
                                                    <td class="img_create_new_camping">
                                                        <div>
                                                            <img src="assets/image/create_new_camping/product_image.png"
                                                                alt="">
                                                            <span>Apple Watch Series
                                                                5</span>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="cpc_box_main">
                                                            <img src="{{ asset('seller-assets/image/create_new_camping/cpc_box.png') }}"
                                                class="cpc_img" alt="">
                                                <span class="ruppy_sign_cpm">&#8377;
                                                    <input type="number" class="d-inline ms-3" value="0.25" min="0.25" max="0.90">
                                                </span>

                                                <p class="text-start ms-3 mt-1">
                                                    Suggested CPC: ₹0.25
                                                </p>
                                    </div>
                                    </td>
                                    <td>Electric</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            4.2
                                            <img src="assets/image/create_new_camping/rating_star.png" class="ms-2" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-toggle">
                                            <input type="checkbox" checked data-toggle="toggle" class="status-toggle">
                                            <label for="switch">Toggle</label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="remove-item-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                                <g>
                                                    <g xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2">
                                                        <path d="m3 7h2v20.48a3.53 3.53 0 0 0 3.52 3.52h15a3.53 3.53 0 0 0 3.48-3.52v-20.48h2a1 1 0 0 0 0-2h-26a1 1 0 0 0 0 2zm22 0v20.48a1.52 1.52 0 0 1 -1.52 1.52h-15a1.52 1.52 0 0 1 -1.48-1.52v-20.48z" fill="#000000" data-original="#000000" class="hovered-path">
                                                        </path>
                                                        <path d="m12 3h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2z" fill="#000000" data-original="#000000" class="hovered-path">
                                                        </path>
                                                        <path d="m12.68 25a1 1 0 0 0 1-1v-12a1 1 0 0 0 -2 0v12a1 1 0 0 0 1 1z" fill="#000000" data-original="#000000" class="hovered-path">
                                                        </path>
                                                        <path d="m19.32 25a1 1 0 0 0 1-1v-12a1 1 0 0 0 -2 0v12a1 1 0 0 0 1 1z" fill="#000000" data-original="#000000" class="hovered-path">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </td>
                                    </tr> --}}
                                    </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</form>
<div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog table_select_product">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-dark d-inline">Select Product </h3>
                <span class="you_can_now_text text-dark">you can now select </span><span class="text-dark bold_upto">upto 20 product</span>
                <div class="profile_model_info d-block">
                    <div class="select_drop_down_model">
                        <div>
                            <p class="filter_add_new_camping_model my-2">Filter</p>
                            <select name="" class="my-2 category_model" id="">
                                <option value="1" selected>Select</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                            </select>
                            <div class="d-inline pt-2 mt-2 ms-3">
                                <label class="checkbox bounce">
                                    <input type="checkbox" id="check_box" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                    </svg>
                                </label>
                            </div>

                        </div>

                        <input type="text" name="" id="" placeholder="Search by Product Id" class="search_by_product">
                    </div>
                    <div class="table_wrap_marketing py-2">
                        <div class="table_model">
                            <div class="">
                                <table class="marketing_main_table fixed_headers datatable" id="productTable">
                                    <thead class="table_heding_marketing">
                                        <tr>
                                            <th colspan="" class="ps-2">Select</th>
                                            <th colspan="">product_Id</th>
                                            <th colspan="">product</th>
                                            <th colspan="">Catagry</th>
                                            <th colspan="">Rating</th>
                                            <th colspan="">Selling price</th>
                                            <th colspan="">Stocks</th>
                                        </tr>
                                    </thead>
                                    <tbody class="marketing_body model_create_new">
                                        @foreach ($products as $product)
                                        <tr id="{{ $product['id'] }}">
                                            <td class=" ps-2">
                                                <label class="checkbox bounce" for="product_{{ $product['id'] }}">
                                                    <input type="checkbox" id="product_{{ $product->id }}" @if (@$campaign) {{ @$editable ? '' : (in_array($product['id'], $productIds) ? 'checked' : '') }} @endif class="productcheck">
                                                    <svg viewBox="0 0 21 21">
                                                        <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                    </svg>
                                                </label>
                                            </td>
                                            <td class="">
                                                <span class="d-block text-center">{{ $product->id }}</span>
                                            </td>
                                            <td class="img_create_new_camping model_img_create_new_camping">
                                                <div>
                                                    <img src="{{ $product->productImage ? asset('storage/product/' . explode(',', $product->productImage->src)[0]) : '' }}" alt="" height="100" width="100">
                                                    <span>{{ $product->title }}</span>
                                                    <input type="hidden" name="product[id][]" value="{{ $product['id'] }}">
                                                </div>
                                            </td>
                                            <td>Electric</td>
                                            <td>
                                                <div class=" ">
                                                    4.2
                                                    <img src="assets/image/create_new_camping/rating_star.png" class="ms-2" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $product->MRP }}</td>
                                            <td>{{ $product->quantity }}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-body modal-body-cancel justify-content-between d-flex align-items-center">
                <p>Product selected:0</p>
                <a href="#" class="submit_product" data-bs-dismiss="modal" id="selected">Submit Product</a>
            </div>

        </div>
    </div>
</div>
@endsection

@section('extra-script')
{{-- <script src="https://code.highcharts.com/maps/highmaps.js"></script> --}}

<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/Datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- india map seccond file -->
<!-- Toggle JS -->

{{-- <script src="{{ asset('seller-assets/js/marketing.js') }}"></script> --}}

<script>
    $(document).ready(function() {

        //Popover Js
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })

        $('.datatable').DataTable({
            paging: false,
            aoColumnDefs: [{
                bSortable: false,
                aTargets: [1, 5]
            }]
        });
    });

    $('#start_time').datetimepicker({
        @if(!@$campaign)
        minDate: new Date(),
        @endif
        useCurrent: true,
        defaultDate: new Date(),
        format: "DD/MM/YYYY HH:mm:ss",

    });

    $('#end_time').datetimepicker({
        @if(!@$campaign)
        minDate: moment().add(1, 'days'),
        @endif
        // useCurrent:true,
        format: "DD/MM/YYYY",
    });

    $(document).on('change', '.productcheck', function() {
        if (!this.checked) {
            var selectedProductId = $(this).closest('tr').attr('id');
            $(".selected-products tbody #" + selectedProductId).remove();
            var rawId = 0;
            $(".selected-products tbody tr").each(function(index) {
                $(this).attr('data-rawId', rawId);
                $(this).find('.cpc').attr('id', 'product_cpc_' + rawId);
                rawId++;
            });
        }
    });

    $('#createAd').on('click', function(e) {
        e.preventDefault();
        // console.log("ok");
        var formData = new FormData($('#campaignForm')[0]);
        var time = moment(formData.get('start_time'), "DD-MM-YYYY HH:mm:ss").format('HH:mm:ss');
        formData.set('end_time', formData.get('end_time') + " " + time);
        @if(@$campaign -> id)
        formData.append('id', "{{ $campaign->id }}");
        formData.append('editable', "{{ $editable }}");
        @endif
        $.ajax({
            url: "{{ route('seller.marketing.manage.campaign') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                $('.text-danger').each(function() {
                    $(this).remove();
                })
                if (data['error']) {
                    $.each(data['error'], function(key, value) {
                        key = key.replaceAll('.', '_');
                        console.log(key);
                        $(`<p class='text-danger'>` + value[0] + `</p>`)
                            .insertAfter(`#` + key);
                    })
                } else {
                    window.location.href = "{{ route('seller.marketing.campaign-list') }}";
                }

            },
            error: function(response) {
                console.log(response);
                console.log('error');
            }
        });
    })
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /*  $('#productTable').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{ route('seller.marketing.product-list') }}",
         columns: [{
                 data: 'select',
                 name: 'select'
             },
             {
                 data: 'title',
                 name: 'title'
             },
             {
                 data: 'category',
                 name: 'category'
             },
             {
                 data: 'selling_price',
                 name: 'selling_price'
             },
             {
                 data: 'status',
                 name: 'status'
             },
             {
                 data: 'action',
                 name: 'action',
                 orderable: false
             },
         ],
         order: [
             [0, 'desc']
         ]
     }); */

    $('#selected').on('click', function() {
        var len = $('.selected-products tbody tr').length;

        len == 1 ? $('.selected-products tbody tr:last').find('td:last').append(
            "<button type='button' class='btn btn-danger btn-sm removeProduct'>Delete</button>") : "";

        var rawId = len ? $('.selected-products tbody tr:last').attr('data-rawId') : -1;

        var remove =
            `<button type='button' class='btn btn-danger btn-sm removeProduct'>Delete</button>`;
        var save =
            `<button type="button" class="btn btn-success btn-sm updateProduct">Save</button> `;

        $("#productTable tbody tr .productcheck:checked").each(function(index) {
            // console.log($(this).closest('tr'));
            var productId = $(this).closest('tr').attr('id');
            if (!$(".selected-products tbody #" + productId).length) {
                rawId++;
                var trData = $(this).closest('tr').clone();
                // console.log($(this).find());
                var cpc =
                    `<td><div class='cpc_box_main'><img src='{{ asset('seller-assets/image/create_new_camping/cpc_box.png') }}' class='cpc_img' ><span class='ruppy_sign_cpm'>&#8377;<input type='number' class='d-inline ms-3' id="product_cpc_` +
                    rawId +
                    `" name='product[cpc][` + rawId +
                    `]' value='0.25'></span><p class='text-start ms-3 mt-1'>Suggested CPC: ₹0.25</p></div></td>`;
                var status =
                    `<td><div class='main-toggle'><input type='checkbox' name='product  id="product` +
                    productId +
                    ` " [status][` + rawId +
                    `]' checked value='1' data-toggle='toggle'class='status-toggle'><label for='switch'>Toggle</label></div></td>`;

                trData.find('.productcheck').closest('td').remove();
                // trData.find('.action-buttons').remove();

                // console.log("<tr>" + trData.html() + status + "<tr>");
                $('.selected-products tbody').append("<tr id='" + productId + "' data-rawId ='" +
                    rawId + "'>" + trData.html() +
                    cpc + status + '<td>' +
                    @if(@$campaign) save +
                    @endif remove +
                    '</td>' + "<tr>");
            }
            // console.log(index + ": " + trData.html());
        });
    })

    $(document).on('click', '.removeProduct', function() {
        var selectedId = $(this).closest('tr').attr('id');
        $(this).closest('tr').remove();

        if ($('.selected-products tbody tr').length == 1)
            $('.selected-products tbody tr').find('.removeProduct').remove();

        var rawId = 0;
        $(".selected-products tbody tr").each(function(index) {
            $(this).attr('data-rawId', rawId);
            $(this).find('.cpc').attr('id', 'product_cpc_' + rawId);
            rawId++;
        });

        $('.datatable tbody #' + selectedId).find('input[type="checkbox"]').prop('checked', false);

        var removeProduct = new FormData();
        removeProduct.append('product_id', selectedId);
        removeProduct.append('campaign_id', "{{ @$campaign->id }}");
        removeProduct.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ route('seller.marketing.delete-campaign-product') }}",
            method: "POST",
            data: removeProduct,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(data) {
                console.log("Success");
                console.log(data);
            },
            error: function(error) {
                console.log("Error");
                console.log(error);
            }
        })
    })

    $(document).on('click', '.updateProduct', function() {
        // removeButton = $(this).closest('tr').find('.removeProduct');
        console.log($(this).closest('tr').attr('id'));
        var id = $(this).closest('tr').attr('id');
        var cpc = $(this).closest('tr').find('input[type="number"]').val();
        var status = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
        var productData = new FormData();
        productData.append('product_id', id);
        productData.append('campaign_id', "{{ @$campaign->id }}");
        productData.append('cpc', cpc);
        productData.append('status', status == undefined ? 0 : 1);
        productData.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: "{{ route('seller.marketing.manage-campaign-product') }}",
            type: 'post',
            data: productData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(data) {
                // console.log(data);
                $('.text-danger').each(function() {
                    $(this).remove();
                })
                if (data['error']) {
                    $.each(data['error'], function(key, value) {
                        key = key.replaceAll('.', '_');
                        // console.log(key);
                        $(`<p class='text-danger'>` + value + `</p>`)
                            .insertAfter(`#` + key);
                    })
                } else {
                    // removeButton.remove();
                }
            },
            error: function(data) {
                console.log('error');
                console.log(data);
            }

        });
    })
</script>


<!-- Toggle JS End -->
@endsection
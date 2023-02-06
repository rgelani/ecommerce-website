@extends('seller.layouts.master')

@section('extra-css')
{{--
<!--owl carousel desfault  -->--}}
{{--
<link rel="stylesheet" href="{{asset('seller-assets/css/owl.theme.default.min.css')}}">--}}

{{--
<!-- owl carousel css -->--}}
{{--
<link rel="stylesheet" href="{{asset('seller-assets/css/owl.carousel.min.css')}}">--}}
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/image_bulk_upload.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/productview.css')}}">

<!-- media css -->
<link rel="stylesheet" href="{{asset('seller-assets/css/media.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
<style>
    .error-display {
        color: #FC0909;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
@endsection

@section('content')
<div class="total_product_wrap">
    <ul>
        <li>
            <div class="total_produt_info">
                <h3>Total Uploads Product</h3>
                <span class="red_text">150</span>
            </div>
        </li>
        <li>
            <div class="total_produt_info">
                <h3>Using Bulk Uploads</h3>
                <span class="blur_text">100</span>
            </div>
        </li>
        <li>
            <div class="total_produt_info">
                <h3>Using Single Uploads</h3>
                <span class="gren_text">100</span>
            </div>
        </li>
    </ul>
</div>

<div class="all_button_wrap">
    <ul class="cm_tab">
        <li>
            <a href="#0" class="common_btn" data-qc_status="0" data-tab="allproduct">ALL</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="2" data-tab="qcprogress">QC in Progress</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="3" data-tab="qcpass">QC Pass</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="1" data-tab="qcpending">QC Pending</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="4" data-tab="qcerro">QC Error</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="5" data-tab="qcfail">QC Fail</a>
        </li>
        <li>
            <a href="#0" class="common_btn" data-qc_status="6" data-tab="draft">Draft</a>
        </li>
    </ul>
    <input type="hidden" name="qc_status" value="0">
</div>

<div class="search_and_table_wrap">

    {!! $dataTable->table() !!}

</div>

<!-- Main Content End -->

<!-- Checkin Bestätigung Modal -->
<div class="modal fade common_modal" id="product_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content terimin_content">
            <div class="modal-body">
                <div class="close_btn" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="common_product_content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product_img_wrap" id="product_image_first">

                            </div>
                            <div class="product_small_img_wrap">
                                <div class="row" id="product_image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product_right_info">
                                <h3 id="product_title" class="product_data"></h3>
                                <div class="rate_wrap">
                                    <div class="start_wrap">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                    <span>4.5 / 1320 reviews</span>
                                </div>
                            </div>

                            <div class="product_details">
                                <div class="product_name">
                                    <p>Price:</p>
                                    <span id="product_price" class="product_data"></span>
                                </div>
                                <div class="product_name">
                                    <p>SKU Code :</p>
                                    <span id="product_sku" class="product_data"></span>
                                </div>
                                <div class="product_name">
                                    <p>Tags :</p>
                                    <span id="product_meta_tags" class="product_data"></span>
                                </div> 
                                <div class="product_name">
                                    <p>Available Stock :</p>
                                    <span id="product_stock" class="product_data"></span>
                                </div>
                            </div>

                            <div class="product_dec product_data" id="product_description">

                            </div>

                            <div class="color_varient">
                                <h3>Varient:</h3>
                                <div class="var_wrap">
                                    <div class="color_wrap">
                                        <p>Color</p>
                                        <ul id="varient_color" class="product_data">

                                        </ul>
                                    </div>
                                    <div class="size_wrap">
                                        <p>Size</p>
                                        <ul id="varient_size" class="product_data">

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="size" class="product_data">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product_bottom_shape">
                <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                        fill="url(#paint0_radial_700_3904)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                        fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                    <defs>
                        <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </radialGradient>
                        <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>
<!-- Checkin Bestätigung Modal -->
@endsection

@section('extra-script')

<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

{!! $dataTable->scripts() !!}
<script>
    $(document).ready(function () {
            //Popover Js
            // $('.common_btn').click(function (e) {
            //     e.preventDefault();
            //     $('input[name=qc_status]').val($(this).data('qc_status'));
            //     LaravelDataTables["product-table"].ajax.reload();
            // });

            $('.dataTables_filter').addClass('search_input_wrap');
        });
        function product_view(id) {

            $.ajax({
                type: "POST",
                url: '{{ route('seller.product.preview') }}',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    $('.product_data').html('');
                    $('#product_title').html(response.title);
                    $('#product_price').html(`₹${response.price}`);
                    $('#product_sku').html(`#${response.sku}`);
                    $('#product_stock').html(`#${response.stock}`);
                    $('#product_HSN_code').html(`#${response.HSN_code}`);
                    $('#product_description').html(`${response.description}`);
                    $('#product_meta_tags').html(`${response.meta_tags}`);

                    $(response.variant).each(function (index, element) {
                        $('#varient_color').append(`<li style="background:${element.color}"></li>`);

                        $(element.size.split(",")).each(function (index, elements) {
                            $('#varient_size').append(`<li class="size_fild">${elements}</li>`);
                        });
                    });
                    $(response.image).each(function (index, elements) {
                        if (index == 0) {
                            $('#product_image_first').html(`<img src="${elements}" alt="product">`);
                        } else {
                            $('#product_image').append(`<div class="col-3">
                                              <div class="product_small">
                                                  <img src="${elements}" alt="small product">
                                              </div>
                                          </div>`);
                        }

                    });
                    // $('#varient_color').html(`${response.variants->color}`);
                    var popoverTriggerList = [].slice.call(document.querySelectorAll(
                        '[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                        return new bootstrap.Popover(popoverTriggerEl)
                    });
                }
            });

        }

        function deleteProduct(url) {
            if (confirm('Delete product') == true) {
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {

                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function (response) {
                        LaravelDataTables["product-table"].ajax.reload();
                    }
                });
            }
        }
</script>

@endsection

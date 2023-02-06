@extends('seller.layouts.master')

@section('extra-css')
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/create_new_camping.css') }}">
    <link rel="stylesheet" href="{{ asset('seller-assets/css/marketing.css') }}">
    <link rel="stylesheet" href="{{ asset('seller-assets/css/create_new_camping_second.css') }}">
@endsection

@section('content')
    {{-- <div class="left_side_new_camping">
            <h2 class="create_new_title text-dark">Create New Campaign</h2>
        </div> --}}
    <div class="create_new_camping_side_main py-2">
        <div class="d-flex justify-content-end pb-3 top_create_btn_main">
            <!-- <button class="top_create_btn" onclick="location.href='{{ route('seller.marketing.form') }}'"> Create
            </button> -->
        </div>
    </div>
    <div class="right_side_new_camping w-100">
        <div class="table_wrap_marketing pb-2">
            <div class="">
                <div>
                    <table class="marketing_main_table">
                        <thead class="table_heding_marketing">
                            <tr>
                                <th colspan="">Id</th>
                                <th colspan="">Name</th>
                                <th colspan="">Total Amount</th>
                                <th colspan="">Remaining Amount</th>
                                <th colspan="">Start Time</th>
                                <th colspan="">End Time</th>
                                <th colspan="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="marketing_body">
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
                                        <img src="assets/image/create_new_camping/product_image.png" alt="">
                                        <span>Apple Watch Series
                                            5</span>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="cpc_box_main">
                                        <div>
                                            <img src="assets/image/create_new_camping/cpc_box.png" class="cpc_img"
                                                alt="">
                                            <span class="ruppy_sign_cpm">&#8377;
                                                <input type="number" class="d-inline ms-3" value="0.25">
                                            </span>

                                        </div>
                                        <p class="text-start ms-3 mt-1">
                                            Suggested CPC: ₹0.25
                                        </p>
                                    </div>
                                </td>
                                <td>Electric</td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        4.2
                                        <img src="assets/image/create_new_camping/rating_star.png" class="ms-2"
                                            alt="">
                                    </div>
                                </td>
                                <td> ₹539</td>
                                <td>670</td>
                                <td>
                                    <div class="action-btn d-flex flex-wrap">
                                        <a href="#" class="viewe-btn">
                                            <?xml version="1.0" ?><svg enable-background="new 0 0 32 32" height="32px"
                                                id="svg2" version="1.1" viewBox="0 0 32 32" width="32px"
                                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                xmlns:svg="http://www.w3.org/2000/svg">
                                                <g id="background">
                                                    <rect fill="none" height="32" width="32" />
                                                </g>
                                                <g id="view">
                                                    <circle cx="16" cy="16" r="6" />
                                                    <path
                                                        d="M16,6C6,6,0,15.938,0,15.938S6,26,16,26s16-10,16-10S26,6,16,6z M16,24c-8.75,0-13.5-8-13.5-8S7.25,8,16,8s13.5,8,13.5,8   S24.75,24,16,24z" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#" class="edit-btn">
                                            <?xml version="1.0" ?><svg id="Layer_1"
                                                style="enable-background:new 0 0 80 80;" version="1.1" viewBox="0 0 80 80"
                                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title />
                                                <g id="Layer_2">
                                                    <g id="Layer_3">
                                                        <polygon
                                                            points="61.8,71.8 8.4,71.8 8.4,18.4 35.1,18.4 35.1,15.4 5.4,15.4 5.4,74.8 64.8,74.8 64.8,41.5 61.8,41.5   " />
                                                        <path
                                                            d="M22.6,46.2l-2.1,13.1l13.1-2.1l1.3-1.4l0,0l39.8-39.7L63.7,5.2L24,44.9L22.6,46.2z M25.3,48.3l6.1,6.2L24,55.7L25.3,48.3z     M70.4,16.1l-3.9,4l-6.6-6.7l4-3.9L70.4,16.1z M57.7,15.5l6.7,6.7L33.8,52.7L27.2,46L57.7,15.5z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 10px;">
        <div class="row">
            <div class="col-lg-12" style="text-align: right;">
                <button class="success-btn" onclick="location.href='{{ route('seller.marketing.form') }}'">Submit</button>
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

            $('.marketing_main_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('seller.marketing.campaign-list-ajax') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'total_amount',
                        name: 'total_amount'
                    },
                    {
                        data: 'remaining_amount',
                        name: 'remaining_amount'
                    },
                    {
                        data: 'start_time',
                        name: 'start_time'
                    },
                    {
                        data: 'end_time',
                        name: 'end_time'
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
            });

        });
    </script>


    <!-- Toggle JS End -->
@endsection

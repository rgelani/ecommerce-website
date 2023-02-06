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
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/datepicker.css')}}">

<!-- media css -->
<link rel="stylesheet" href="{{asset('seller-assets/css/media.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
<style>
    .error-display {
        color: #FC0909;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<!-- Font-Awesome Fonts -->
<link href="{{ asset('seller-assets/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('seller-assets/css/bootstrap.min.css') }}">

<!-- Style Sheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/style.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="assets/css/productview.css"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/order.css') }}">
@endsection

@section('content')
<div class="total_product_wrap">
    <ul>

    </ul>
</div>
<br /> <br />
<div class="all_button_wrap">
    <ul class="cm_tab">
        <li>
            <a href="{{ route('seller.order.newOrder') }}" class="common_btn" data-tab="allproduct">New Order </a>
            <span class="red_text" id="no"> no </span>
        </li>
        <li>
            <a href="{{ route('seller.order.panddingOrder') }}" class="common_btn" data-qc_status="0"
                data-tab="qcprogress">Pending</a>
        </li>
        <li>
            <a href="{{ route('seller.order.RedyToShipOrder') }}" class="common_btn" data-qc_status="1"
                data-tab="qcpass">Ready to
                ship</a>
        </li>
        <li>
            <a href="{{ route('seller.order.inProcessOrder') }}" class="common_btn" data-qc_status="2"
                data-tab="qcpending">In
                Process</a>
        </li>
        <li>
            <a href="{{ route('seller.order.shippedOrder') }}" class="common_btn" data-qc_status="3"
                data-tab="qcerro">Shipped</a>
        </li>
        <li>
            <a href="{{ route('seller.order.diveredOrder') }}" class="common_btn" data-qc_status="4"
                data-tab="qcfail">Deliverd</a>
        </li>

    </ul>
</div>



<div class="search_and_table_wrap">
    {{-- <div class="search_wrap">
        <div class="search_input_wrap">
            <input type="text" placeholder="Search your Product">

            <div class="search_icon">
                <img src="{{ asset('seller-assets/image/product_view/search.png') }}" alt="icon">
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle sort_btn" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Sort by category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#" onclick="sortTable(0)">sort by A to Z </a>
                </li>
                <li><a class="dropdown-item" href="#" onclick="sortTable(1)">sort by Z to A</a></li>
                <li><a class="dropdown-item" href="#">sort 3</a></li>
            </ul>
        </div>
    </div> --}}
    <div class="table_wrap_section">
        <div class="cm_tab_contain allproduct active">
            <div class="product_section_wrap table-responsive">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-end py-4">
    <button class="common_btn px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Download Rreport</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="close_profile_img">
                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="w-100 d-flex pe-3 mt-5 justify-content-end">
                    <select aria-placeholder="" class="w-25 d-block date_picker_dropdown">
                        <option value="1">Return</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <p class="pt-3 pb-1">Choose a date:</p>
                <div class="mb-5 c-datepicker-date-editor c-datepicker-single-editor J-datepicker-day mt10">
                    <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
                    <input type="text" id="myText" name="" placeholder="Select"
                        class=" c-datepicker-data-input only-date" value="">
                </div>
                <p id="demo" class="py-3 my-2"> </p>

            </div>
            <div class="d-flex justify-content-center">

                <button onclick="getDateAndTime()" class="my-3 w-25 common_btn submit_order_date_picker">Submit</button>
            </div>

            <!-- <div class="modal-body modal-body-cancel text-center">
                <a class="logout" href="#">Logout</a>
            </div> -->

        </div>
    </div>
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







<!-- DATE PICKER JS -->
<!-- moment for time -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!-- custom min JS for Date picker -->
<script src="{{ asset('seller-assets/js/datepicker.all.min.js') }}"></script> --}}
<script src="{{ asset('seller-assets/js/datepicker.en.js') }}"></script>
{!! $dataTable->scripts() !!}

<!-- if you can change default time ==> for js below  -->
<script type="text/javascript">
    $(function(){
      $('.J-datepicker-time').datePicker({
        format: 'HH:mm:ss',
        min: '04:23:11',
        language: 'en'
      });
      $('.J-datepicker-time-range').datePicker({
        format: 'HH:mm:ss',
        isRange: true,
        min: '04:23:11',
        max: '20:59:59',
        language: 'en'
      });

      var DATAPICKERAPI = {
        activeMonthRange: function () {
          return {
            begin: moment().set({ 'date': 1, 'hour': 0, 'minute': 0, 'second': 0 }).format('YYYY-MM-DD HH:mm:ss'),
            end: moment().set({ 'hour': 23, 'minute': 59, 'second': 59 }).format('YYYY-MM-DD HH:mm:ss')
          }
        },
        shortcutMonth: function () {
          var nowDay = moment().get('date');
          var prevMonthFirstDay = moment().subtract(1, 'months').set({ 'date': 1 });
          var prevMonthDay = moment().diff(prevMonthFirstDay, 'days');
          return {
            now: '-' + nowDay + ',0',
            prev: '-' + prevMonthDay + ',-' + nowDay
          }
        },
        shortcutPrevHours: function (hour) {
          var nowDay = moment().get('date');
          var prevHours = moment().subtract(hour, 'hours');
          var prevDate=prevHours.get('date')- nowDay;
          var nowTime=moment().format('HH:mm:ss');
          var prevTime = prevHours.format('HH:mm:ss');
          return {
            day: prevDate + ',0',
            time: prevTime+',' + nowTime,
            name: 'Nearly '+ hour+' Hours'
          }
        },
        rangeMonthShortcutOption1: function () {
          var result = DATAPICKERAPI.shortcutMonth();
          var resultTime= DATAPICKERAPI.shortcutPrevHours(18);
          return [{
            name: 'Yesterday',
            day: '-1,-1',
            time: '00:00:00,23:59:59'
          }, {
            name: 'This Month',
            day: result.now,
            time: '00:00:00,'
          }, {
            name: 'Lasy Month',
            day: result.prev,
            time: '00:00:00,23:59:59'
          }, {
            name: resultTime.name,
            day: resultTime.day,
            time: resultTime.time
          }];
        },
        rangeShortcutOption1: [{
          name: 'Last week',
          day: '-7,0'
        }, {
          name: 'Last Month',
          day: '-30,0'
        }, {
          name: 'Last Three Months',
          day: '-90, 0'
        }],
        singleShortcutOptions1: [{
          name: 'Today',
          day: '0',
          time: '00:00:00'
        }, {
          name: 'Yesterday',
          day: '-1',
          time: '00:00:00'
        }, {
          name: 'One Week Ago',
          day: '-7'
        }]
      };
        $('.J-datepicker').datePicker({
          hasShortcut:true,
          language: 'en',
          min:'2018-01-01 04:00:00',
          max:'2029-10-29 20:59:59',
          shortcutOptions:[{
            name: 'Today',
            day: '0'
          }, {
            name: 'Yesterday',
            day: '-1',
            time: '00:00:00'
          }, {
            name: 'One Week Ago',
            day: '-7'
          }],
          hide:function(){
            console.info(this)
          }
        });


        $('.J-datepicker-day').datePicker({
          hasShortcut: true,
          language: 'en',
          shortcutOptions: [{
            name: 'Today',
            day: '0'
          }, {
            name: 'Yesterday',
            day: '-1'
          }, {
            name: 'One week ago',
            day: '-7'
          }]
        });


        $('.J-datepicker-range-day').datePicker({
          hasShortcut: true,
          language: 'en',
          format: 'YYYY-MM-DD',
          isRange: true,
          shortcutOptions: DATAPICKERAPI.rangeShortcutOption1
        });


        $('.J-datepickerTime-single').datePicker({
          format: 'YYYY-MM-DD HH:mm',
          language: 'en',
        });


        $('.J-datepickerTime-range').datePicker({
          format: 'YYYY-MM-DD HH:mm',
          isRange: true,
          language: 'en'
        });


        $('.J-datepicker-range').datePicker({
          hasShortcut: true,
          language: 'en',
          min: '2018-01-01 06:00:00',
          max: '2029-04-29 20:59:59',
          isRange: true,
          shortcutOptions: [{
            name: 'Yesterday',
            day: '-1,-1',
            time: '00:00:00,23:59:59'
          },{
            name: 'Last Week',
            day: '-7,0',
            time:'00:00:00,'
          }, {
            name: 'Last Month',
            day: '-30,0',
            time: '00:00:00,'
          }, {
            name: 'Last Three Months',
            day: '-90, 0',
            time: '00:00:00,'
          }],
          hide: function (type) {
            console.info(this.$input.eq(0).val(), this.$input.eq(1).val());
            console.info('Type:',type)
          }
        });
        $('.J-datepicker-range-betweenMonth').datePicker({
          isRange: true,
          between:'month',
          language: 'en',
          hasShortcut: true,
          shortcutOptions: DATAPICKERAPI.rangeMonthShortcutOption1()
        });


        $('.J-datepicker-range-between30').datePicker({
          isRange: true,
          language: 'en',
          between: 30
        });

        $('.J-yearMonthPicker-single').datePicker({
          format: 'YYYY-MM',
          language: 'en',
          min: '2018-01',
          max: '2029-04',
          hide: function (type) {
            console.info(this.$input.eq(0).val());
          }
        });

        $('.J-yearPicker-single').datePicker({
          format: 'YYYY',
          language: 'en',
          min: '2018',
          max: '2029'
        });

    });
        function getDateAndTime() {

            var date = $('#myText').val();
            if(date) {

                $.ajax({
                    type: "POST",
                    url: '{{ route('seller.order.pickup.request') }}',
                    data: {
                        date: date,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function (response) {
                        LaravelDataTables["seller-order-table"].ajax.reload();
                    }
                });
            }

        }
        $(document).ready(function () {
            //Popover Js


            $('.dataTables_filter').addClass('search_input_wrap');


        });

</script>

@endsection

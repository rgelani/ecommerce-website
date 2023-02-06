@extends('seller.layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('seller-assets/css/packeging_metiriyal.css')}}">
@endsection
@section('content')
<div class="main_content_lg" >
                   
                    <div class="py-2">
                         <div class="main_pakaging"> 
                              <div class="pb-2">
                                        <ul class="pakeging_heading">
                                            <li><a class="active_border" href="packeging_metiriyal.html">Inner Box</a></li>
                                            <li><a class="" href="inner_polythenne.html">Inner polythene</a> </li>
                                            <li><a class="" href="main_polythene.html">Main polythene</a> </li>
                                            <li><a href="safty_cover.html">Safty cover</a></li>
                                        </ul>
                                        <div class="main_drop_dowan_packaging mt-5 justify-content-end">
                                          
                                            <div class="my-3 payment_from_balance pe-5">
                                                <div class="mb-1">Payment :-</div>
                                                <div>From Balance</div>
                                            </div>
                                        </div>
                              </div>
                              <div class="py-2 mt-5">
                                <div class="d-flex justify-content-between align-baseline align-items-baseline">
                                        <div class="">
                                            <h4 class="my-2 mb-3">Total no. of items:-</h4>
                                            <div class="d-flex align-content-center my-3">
                                                <input class="input_comm_packeging" type="number" placeholder="20*20">
                                                <p class="packeging_star_comm">*</p>
                                                <input class="input_comm_packeging small_input_comm_packeging" type="number" placeholder="10">
                                                <input class="input_comm_packeging ms-4" type="number" placeholder="200">
                                            </div>
                                            <div class="d-flex align-content-center my-3">
                                                <input class="input_comm_packeging" type="number" placeholder="20*20">
                                                <p class="packeging_star_comm">*</p>
                                                <input class="input_comm_packeging small_input_comm_packeging" type="number" placeholder="10">
                                                <input class="input_comm_packeging ms-4" type="number" placeholder="200">
                                            </div>
                                            <div class="d-flex align-content-center my-3">
                                                <input class="input_comm_packeging" type="number" placeholder="20*20">
                                                <p class="packeging_star_comm">*</p>
                                                <input class="input_comm_packeging small_input_comm_packeging" type="number" placeholder="10">
                                                <input class="input_comm_packeging ms-4" type="number" placeholder="200">
                                            </div>
                                            <div class="d-flex align-content-center justify-content-end my-3">
                                               <h4 class="ms-3">Total Amount:-</h4>
                                                <input class="input_comm_packeging ms-4" type="number" placeholder="200">
                                            </div>
                                        </div>
                                    <div>
                                        <button>
                                        <img src="{{('seller-assets/image/packeging_metiriyal/download_excel_icon.png')}}" alt="">
                                            Download Excel Templet 
                                        </button>
                                    </div>
                                </div>
                              </div>
                         </div>
                    </div>
               </div>
               <!--Start profile Modal -->
               <div class="modal fade" id="exampleModal_2" tabindex="-1"        aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content">
                              <div class="modal-header">

                                   <div class="close_profile_img">
                                        <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                   </div>
                                   <div class="profile_model_info">
                                        <div>
                                             <div class="profile_img_round_main">
                                                  <img src="assets/image/image_bluk/profile_pic_model.png"
                                                       class="profile_img_round" alt="">
                                             </div>
                                             <div class="text-center my-3">
                                                  <h4 class="text-dark">DoNotDisturb</h4>
                                                  <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class=" text-center">
                                   <a class="logout" href="#">Logout</a>
                              </div>

                         </div>
                    </div>
               </div>
               <!--End profile Model -->


               @endsection

@section('extra-script')

    <script>
        $(document).ready(function() {
            //Popover Js
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        });
    </script>
    <!--End model js -->

    <!--start pie chart  -->
    <script>
        $('#static').listtopie({
            startAngle: 0,
            strokeWidth: 0,
            hoverEvent: false,
            drawType: 'round',
            speedDraw: 150,
            hoverColor: '#ffffff',
            textColor: '#000',
            strokeColor: '#ffffff',
            textSize: '18',
            hoverAnimate: true,
            marginCenter: 1,
            sectorRotate: true,
            easingType: mina.bounce,
            infoText: true,
        });
        $('.donut').listtopie({
            startAngle: 270,
            strokeWidth: 2,
            hoverEvent: true,
            hoverBorderColor: '#2a363b',
            drawType: 'round',
            speedDraw: 150,
            hoverColor: '#ffffff',
            textColor: '#000',
            strokeColor: '#ffffff',
            textSize: '14',
            hoverAnimate: true,
            marginCenter: 50,
        });
    </script>
    <!--End pie chart  -->

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('.razor-pay-btn').on('click', function(e) {
            var totalAmount = $('#amount').val();
            if (totalAmount.length === 0) {
                totalAmount = 50;
            }
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": (totalAmount * 100), // 2000 paise = INR 20
                "name": "I KART ONLINE SELLING PLATFORM",
                "description": "Razorpay",
                "image": "{{ asset('seller-assets/image/dashborad_logo.png')}}') }}",
                "handler": function(response) {
                    $.ajax({
                        url: '{{ route('seller.razorpay-payment') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            description: $('#description').val(),
                            razorpay_payment_id: response.razorpay_payment_id,
                            totalAmount: totalAmount,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function() {
                            swal("Deposited!", 'Amount ₹' + totalAmount +
                                ' deposit successfully', "success");
                            setInterval(function() {
                                location.reload();
                            }, 2000); //run this thang every 2 seconds
                        },
                        error: function() {
                            swal("Failed!", 'Amount ₹' + totalAmount + ' failed to deposit',
                                "error");
                        }
                    });
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#528FF0"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });

        $(document).on('click', '#add-campaign-amount', function() {
            console.log('clicked');
            var amount = $('#outstanding_amount').val();
            $.ajax({
                url: "{{ route('seller.add-campaign-amount') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    amount: amount,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('.text-danger').each(function() {
                        $(this).remove();
                    })
                    if (data['error']) {
                            $(`<p class='text-danger'>` + data['error']['amount'] + `</p>`)
                                .insertAfter(`#outstanding_amount`);
                    }
                    swal("Deposited!", 'Amount ₹' + amount + ' deposit successfully', "success");
                    setInterval(function() {
                        // location.reload();
                    }, 2000); //run this thang every 2 seconds
                },
                error: function() {
                    swal("Failed!", 'Amount ₹' + amount + ' failed to deposit', "error");
                }
            });
        })
    </script>
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
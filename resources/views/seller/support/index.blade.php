@extends('seller.layouts.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/singleProduct_listing.css')}}">

@endsection

@section('content')
<div class="main_content_lg">
<div class="support_main">
                        <div class="cmpose_and_serch pt-3 pb-3 d-flex ">
                            <div class="search_box_2 position-relative col-6">
                                <select class="bgc ">
                                    <option value="Search your Category" selected="">Search by Category</option>
                                    <option value="Fashion">***</option>
                                    <option value="Electronics">***</option>
                                    <option value="Home">***</option>
                                    <option value="Beauty &amp; Personal Care">***</option>
                                    <option value="Men's Grooming">***</option>
                                </select>
                            </div>
                            <div class="compose_box  search_box_2   col-6 text-end ">
                                <div class="compos_border d-inline">
                                    <span class="me-3"><img src="image/plus_icon.png" alt=""></span>
                                    <span>
                                        <svg width="20" height="19" class=" me-3 " viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5714 7.46429H12.1429V1.35714C12.1429 0.607746 11.5031 0 10.7143 0H9.28571C8.49687 0 7.85714 0.607746 7.85714 1.35714V7.46429H1.42857C0.639732 7.46429 0 8.07203 0 8.82143V10.1786C0 10.928 0.639732 11.5357 1.42857 11.5357H7.85714V17.6429C7.85714 18.3923 8.49687 19 9.28571 19H10.7143C11.5031 19 12.1429 18.3923 12.1429 17.6429V11.5357H18.5714C19.3603 11.5357 20 10.928 20 10.1786V8.82143C20 8.07203 19.3603 7.46429 18.5714 7.46429Z" fill="#4D7C73"/>
                                        </svg>
                                        
                                        Compose</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat_section_main">

                            <div class="user_chat_section_main d-flex">
                                <div class="user_profile_pictur_section">
                                    <div class="user_contect_main d-flex py-2 align-items-center">
                                        <ul class="support_header d-flex mb-0 justify-content-center w-100">
                                            <li><a href="#" class="support_active">Active</a></li>
                                            <li><a href="#">Closed</a></li>
                                            <li><a href="#">Stared</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                        <div class="support_serch_icon me-4">
                                            <img src="{{ asset('seller-assets/image/search.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="single_member_row sigle_user_active d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{ asset('seller-assets/image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_member_row d-flex p-3">
                                        <div class="support_user_profile me-3">
                                            <img src="{{asset('seller-assets//image/support_user.png')}}" alt="">
                                        </div>
                                        <div class="suppor_user_information ">
                                            <p class="mb-0">Rudani vievek m</p>
                                            <h4 class="mb-1">Unable to select currency when or</h4>
                                            <p>Hello team, I am facing problem as i can not select</p>
                                        </div>
                                        <div class="date_start">
                                            <div class="date d-flex align-items-center">
                                                <img src="{{asset('seller-assets//image/support_pin.png')}}" alt="">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                            <div class="support_star text-end mt-4">
                                                <img src="{{asset('seller-assets//image/support_star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sigle_user_chat_main w-100">
                                    <div class="single_chat_header">
                                        <h3>Unable to select currency when order</h3>
                                        <div class="d-flex justify-content-between pt-3">
                                            <span class=" ">
                                                <img src="{{asset('seller-assets/image/support_flag.png')}}" alt="" class="me-2 d-inline">
                                                <p class="mb-0 d-inline">Technical Problem</p>
                                            </span>
                                            <span class="d-flex text-end support_mark_read_button">
                                                <img src="{{asset('seller-assets/image/check_icon.png')}}" alt="" class="">
                                                <p class="mb-0 support_button">Mark as Read</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="support_user_chat p-3">
                                        <div
                                            class="chat_profile_image d-flex align-items-center justify-content-between">
                                            <div class="profile_picture_and_name ">
                                                <img src="{{asset('seller-assets/image/support_user.png')}}" alt="" class="d-inline">
                                                <p class="d-inline ps-3">Rudani vievek m</p>
                                            </div>
                                            <div class="chat_date ">
                                                <p class="mb-0">12 Jan</p>
                                            </div>
                                        </div>
                                        <div class="user_support_chat ms-5 ps-4">
                                            <div class="support_member">
                                                <div>
                                                    <p>Hey!</p>
                                                    <div class="message_time pb-0">12:56PM</div>
                                                </div>
                                                <div>
                                                    <p> I recently bought bitcoin from you. But still have not recieved
                                                        any of it yet</p>
                                                    <div class="message_time pb-0">12:56PM</div>

                                                </div>
                                                <div>
                                                    <p> Could you please send it as soon as possible</p>
                                                    <div class="message_time pb-0">12:56PM</div>

                                                </div>
                                            </div>
                                            <div class="customer_message text-end">
                                                <div>
                                                    <p> Customer,</p>
                                                    <div class="message_time pb-0">12:56PM</div>

                                                </div>
                                                <div>
                                                    <p> Thank you</p>
                                                    <div class="message_time pb-0">12:56PM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="support_reply_main mx-4">
                                        <div class="reply_header_main py-3 ps-3">
                                            <h3 class="me-4">Reply</h3>
                                            <h3>Private Note</h3>
                                        </div>
                                        <div class="repy_note py-3 ps-3">
                                            <p>hello...</p>
                                        </div>
                                        <div class="reply_button py-3 ps-3">
                                            <button class="support_reply_button me-3">Reply</button>
                                            <img src="{{asset('seller-assets/image/support_gallary.png')}}" alt="">
                                            <img src="{{asset('seller-assets/image/support_attechment.png')}}" alt="">
                                            <img src="{{asset('seller-assets/image/suport_hash.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="main-support-profile">
                                    <div class="support-profile-top">
                                        <div class="support-profile-image">
                                            <img src="{{asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}" alt="">
                                        </div>
                                        <div class="support-profile-name">
                                            <h6>Rudani vievek m</h6>
                                        </div>
                                        <div class="support-profile-order">
                                            <div class="support-profile-order">
                                                <div class="support-profile-col">
                                                    <h6>23</h6>
                                                    <h5>Total Order</h5>
                                                </div>
                                                <div class="support-profile-col">
                                                    <h6>20</h6>
                                                    <h5>Complete</h5>
                                                </div>
                                                <div class="support-profile-col">
                                                    <h6>3</h6>
                                                    <h5>Progress</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="support-profile-bottom">
                                        <div class="support-profile-bottom-title">
                                            <h2>Admin INFORMATION</h2>
                                        </div>
                                        <ul class="support-profile-social">
                                            <li>
                                                <a href="#">
                                                    <span>
                                                        <img src="{{asset('seller-assets/image/support/email.svg')}}" alt="">
                                                    </span>
                                                    <span>info@softnio.com</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>
                                                        <img src="{{asset('seller-assets/image/support/phone.svg')}}" alt="">
                                                    </span>
                                                    <span>+938392939</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>
                                                        <img src="{{asset('seller-assets/image/support/location.svg')}}" alt="">
                                                    </span>
                                                    <span>1134 Ridder Park Road
                                                        San Fransisco, CA 94851</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="support-profile-bottom-title">
                                            <h2>ADDITIONAL</h2>
                                        </div>
                                        <ul class="additioal-list">
                                            <li>
                                                <span>Admin ID: TID-049583</span>
                                                <span>Support ID: Abu Bin Ishtiak</span>
                                            </li>
                                            <li>
                                                <span>Status:
                                                    <a href="#">Open</a>
                                                </span>
                                                <span>Last Reply: 24/03/2022 10:25AM</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
@endsection
@section('extra-script')

<script>
    console.log('ehhlldsd');
            // $(function() {
                let user_id = "{{ auth()->guard('seller')->user()->id }}-2";
                let ip_address = '127.0.0.1';
                let socket_port = '8005';
                let socket = io(ip_address + ':' + socket_port);
                let type = 1;
                socket.on('connect', function() {
                    console.log('heloosaafzxfsa');
                    socket.emit('user_connected', `${user_id}`);
                });

                socket.on('updateUserStatus', (data) => {
                    let $userStatusIcon = $('.user-status-icon');
                    $userStatusIcon.removeClass('text-success');
                    $userStatusIcon.attr('title', 'Away');

                    $.each(data, function(key, val) {
                        if (val !== null && val !== 0) {
                            let $userIcon = $(".user-icon-" + key);
                            $userIcon.addClass('text-success');
                            $userIcon.attr('title', 'Online');
                        }
                    });
                });
            // });
</script>
<script>
    let $chatInput = $(".chat-input");
            let $chatInputToolbar = $(".chat-input-toolbar");
            let $chatBody = $(".chat-body");
            let $messageWrapper = $("#messageWrapper");


            let friendId = "{{ $friendInfo->id }}";


            $chatInput.keypress(function(e) {
                let message = $(this).html();
                if (e.which === 13 && !e.shiftKey) {
                    $chatInput.html("");
                    sendMessage(message);
                    return false;
                }
            });


            $chatInput.keypress(function(e) {
                let message = $(this).html();
                if (e.which === 13 && !e.shiftKey) {
                    $chatInput.html("");
                    sendMessage(message);
                    return false;
                }
            });


            function sendMessage(message) {
                let url = "{{ route('seller.support.message.send-message') }}";
                let form = $(this);
                let formData = new FormData();
                let token = "{{ csrf_token() }}";

                formData.append('message', message);
                formData.append('_token', token);
                formData.append('receiver_id', friendId);
                formData.append('type', '1');

                appendMessageToSender(message);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function(response) {
                        if (response.success) {
                            //    console.log(response.data);
                            socket.emit('appendMessageToSender', response.data);

                        }
                    }
                });
            }

            function appendMessageToSender(message) {
                let name = '{{ $myInfo->name }}';
                let image = '{!! $myInfo->name !!}';

                let userInfo = '<div class="col-md-12 user-info">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '\n' +
                    '<div class="chat-name font-weight-bold">\n' +
                    name +
                    '<span class="small time text-gray-500" title="' + getCurrentDateTime() + '">\n' +
                    getCurrentTime() + '</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div class="col-md-12 message-content">\n' +
                    '                            <div class="message-text">\n' + message +
                    '                            </div>\n' +
                    '                        </div>';


                let newMessage = '<div class="row message align-items-center mb-2">' +
                    userInfo + messageContent +
                    '</div>';

                $messageWrapper.append(newMessage);
            }

            function appendMessageToReceiver(message) {
                alert('appendMessageToReceiver');
                let name = '{{ $friendInfo->name }}';
                let image = '{!! $friendInfo->name !!}';

                let userInfo = '<div class="col-md-12 user-info">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '\n' +
                    '<div class="chat-name font-weight-bold">\n' +
                    name +
                    '<span class="small time text-gray-500" title="' + dateFormat(message.created_at) + '">\n' +
                    timeFormat(message.created_at) + '</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div class="col-md-12 message-content">\n' +
                    '                            <div class="message-text">\n' + message.content +
                    '                            </div>\n' +
                    '                        </div>';


                let newMessage = '<div class="row message align-items-center mb-2">' +
                    userInfo + messageContent +
                    '</div>';

                $messageWrapper.append(newMessage);
            }
            // io.on('connection', function(socket) {
            socket.on('appendMessageToSender', function(data) {
                alert(data);
            });
            // });

            socket.on("hello", function(message) {

    alert('HLLO');
    });
                socket.on("private-channel:App\\Events\\PrivateMessageEvent", function(message) {

                appendMessageToReceiver(message);
            });

            let $addGroupModal = $("#addGroupModal");
            $(document).on("click", ".btn-add-group", function() {
                $addGroupModal.modal();
            });

            $("#selectMember").select2();


        function submitfunction() {
                let message = $(this).html();
                console.log(message);
                // if (e.which === 13 && !e.shiftKey) {
                //     $chatInput.html("");
                //     sendMessage(message);
                //     return false;
                // }
            }

            function textsend() {
                console.log('hello');
            }


        function getCurrentTime() {
            return moment().format('h:mm A');
        }

        function getCurrentDateTime() {
            return moment().format('MM/DD/YY h:mm A');
        }

        function dateFormat(datetime) {
            return moment(datetime, 'YYYY-MM-DD HH:mm:ss').format('MM/DD/YY h:mm A');
        }

        function timeFormat(datetime) {
            return moment(datetime, 'YYYY-MM-DD HH:mm:ss').format('h:mm A');
        }
</script>
@endsection

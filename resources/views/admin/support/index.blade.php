@extends('admin.layouts.master')

@section('extra-css')

    <!-- soket -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
        integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
        crossorigin="anonymous"></script>
@endsection

@section('content')
    <!-- start Q/C page -->
    <div class="product_view">

        <div class="support_main">
            <div class="cmpose_and_serch pt-3 px-3 d-flex ">
                <div class="search_box_2 position-relative col-xl-6">
                    <select class="bgc ">
                        <option value="Search your Category" selected>Search by Category</option>
                        <option value="Fashion">***</option>
                        <option value="Electronics">***</option>
                        <option value="Home">***</option>
                        <option value="Beauty & Personal Care">***</option>
                        <option value="Men's Grooming">***</option>
                    </select>
                </div>
                <div class="compose_box  search_box_2   col-xl-6 text-end ">
                    <div class="compos_border d-inline">
                        <span class="me-3"><img src="image/plus_icon.png" alt=""></span>
                        <span>Compose</span>
                    </div>
                </div>
            </div>
            <div class="chat_section_main">
                <form action="" method="post">
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
                                    <img src="image/search.png" alt="">
                                </div>
                            </div>
                            @foreach ($friendsInfo as $friendInfo)
                                <div class="single_member_row sigle_user_active d-flex p-3" onclick="showAllModel({{ $friendInfo->id }})">
                                    <div class="support_user_profile me-3">
                                        <img src="image/support_user.png" alt="">
                                    </div>
                                    <div class="suppor_user_information ">
                                        <p class="mb-0">Rudani vievek m</p>
                                        <p class="mb-0">{{ $friendInfo->first_name }}</p>
                                        <h4 class="mb-1">{{ $friendInfo->email }}</h4>
                                    </div>
                                    <div class="date_start">
                                        <div class="date d-flex align-items-center">
                                            <img src="image/support_pin.png" alt="">
                                            <p class="mb-0">12 Jan</p>
                                        </div>
                                        <div class="support_star text-end mt-4">
                                            <img src="image/support_star.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="sigle_user_chat_main d-none">
                            <div class="single_chat_header">
                                <h3>Unable to select currency when order</h3>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class=" ">
                                        <img src="image/support_flag.png" alt="" class="me-2 d-inline">
                                        <p class="mb-0 d-inline">Technical Problem</p>
                                    </span>
                                    <span class="d-flex text-end support_mark_read_button">
                                        <img src="image/check_icon.png" alt="" class="">
                                        <p class="mb-0 support_button">Mark as Read</p>
                                    </span>
                                </div>
                            </div>
                            <div class="support_user_chat p-3">
                                <div class="chat_profile_image d-flex align-items-center justify-content-between">
                                    <div class="profile_picture_and_name ">
                                        <img src="image/support_user.png" alt="" class="d-inline">
                                        <p class="d-inline ps-3">Rudani vievek m</p>
                                    </div>
                                    <div class="chat_date ">
                                        <p class="mb-0">12 Jan</p>
                                    </div>
                                </div>
                                <div class="user_support_chat ms-5 ps-4" id="messageWrapper">

                                </div>
                            </div>
                            <div class="support_reply_main mx-4">
                                <div class="reply_header_main py-3 ps-3">
                                    <h3 class="me-4">Reply</h3>
                                    <h3>Private Note</h3>
                                </div>
                                <div class="repy_note py-3 ps-3">
                                    <div class="chat-input bg-white" id="chatInput" contenteditable="">

                                    </div>
                                </div>
                                <div class="reply_button py-3 ps-3">
                                    <div class="chat-input-toolbar">
                                        <button title="Add File" class="btn btn-light btn-sm btn-file-upload">
                                            <i class="fa fa-paperclip"></i>
                                        </button> |

                                        <button title="Bold" class="btn btn-light btn-sm tool-items"
                                            onclick="document.execCommand('bold', false, '');">
                                            <i class="fa fa-bold tool-icon"></i>
                                        </button>

                                        <button title="Italic" class="btn btn-light btn-sm tool-items"
                                            onclick="document.execCommand('italic', false, '');">
                                            <i class="fa fa-italic tool-icon"></i>
                                        </button>
                                    </div>
                                    <img src="image/support_gallary.png" alt="">
                                    <img src="image/support_attechment.png" alt="">
                                    <img src="image/suport_hash.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="support_profile_main text-center d-none">
                            <div class="profile_info_main">
                                <div class="profile_image">
                                    <img src="image/support_main_profile.png" alt="" class="pt-3">
                                    <p class="pt-3 seller_name" ></p>
                                </div>
                                <div class="suppor_order_info d-flex justify-content-center">
                                    <div class="support_total_order">
                                        <p class="seller_email"></p>
                                        <p>Total Order</p>
                                    </div>
                                    <div class="support_total_order">
                                        <p>20</p>
                                        <p>Complete</p>
                                    </div>
                                    <div class="support_total_order">
                                        <p>3</p>
                                        <p>Progress</p>
                                    </div>
                                </div>
                            </div>
                            <div class="support_user_information pt-3 ">
                                <p class="user_information text-center">USER INFORMATION</p>
                                <div class="user_info user_mail">
                                    <img src="image/support_mail.png" alt="">
                                    <p>info@softnio.com</p>
                                </div>
                                <div class="user_info user_contact">
                                    <img src="image/support_phone.png" alt="">
                                    <p>+938392939</p>
                                </div>
                                <div class="user_info user_add">
                                    <img src="image/support_location.png" alt="" class="h-100">
                                    <p class=""> 1134 Ridder Park Road San Fransisco, CA 94851</p>
                                </div>
                            </div>
                            <div class="support_aditional pt-5">
                                <p class="text-center mb-4 ">ADDITIONAL </p>
                                <div class="aditional_info_main d-flex">
                                    <div class="support_id_main  px-5 justify-content-between mb-4">
                                        <div class="seller_id text-start">
                                            <p>Seller ID: </p>
                                            <p>TID-049583</p>
                                        </div>

                                        <div class="seller_id text-start mt-4">
                                            <p>Status:</p>
                                            <p>Open</p>
                                        </div>
                                    </div>
                                    <div class="support_status  px-5  justify-content-between">
                                        <div class="seller_id text-start">
                                            <p>Support ID: </p>
                                            <p>Abu Bin Ishtiak</p>
                                        </div>
                                        <div class="seller_id text-start mt-4">
                                            <p>Last Reply</p>
                                            <p>24/03/2022 10:25AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>


    <!-- end Q/C page -->
@endsection
{{-- @section('extra-js') --}}
@section('extra-js')
    {{-- soket --}}
    <script src="/socket.io/socket.io.js"></script>
    <script src="{{ asset('seller-assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="js/main.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
        integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
        crossorigin="anonymous"></script>
    {{-- soket --}}


    <script>
        var friendId = null;

        function showAllModel(id) {
            let url = "{{ route('admin.support.seller.info') }}";
                let form = $(this);
                let formData = new FormData();
                let token = "{{ csrf_token() }}";
                formData.append('id', id);
                formData.append('_token', token);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function(response) {
                        if (response.success) {
                            $('.sigle_user_chat_main').removeClass('d-none');
                            $('.support_profile_main').removeClass('d-none');
                            $('.seller_name').html(response.seller.first_name);
                            $('.seller_email').html(response.seller.email);

                            friendId = response.seller.id;
                            console.log(friendId);
                            if(response.messageData) {


                            }
                        }
                    }
                });
        }
            // $(function() {
                let user_id = "{{ auth()->guard('admin')->user()->id }}-1";
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
                let url = "{{ route('admin.support.message.send-message') }}";
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



            socket.on("private-channel:App\\Events\\PrivateMessageEvent", function(message) {
                if(message.sender_id == `${friendId}-2`)
                    appendMessageToReceiver(message);
            });


            let $addGroupModal = $("#addGroupModal");
            $(document).on("click", ".btn-add-group", function() {
                $addGroupModal.modal();
            });

            $("#selectMember").select2();

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


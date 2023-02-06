@extends('seller.layouts.master')

@section('extra-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('seller-assets/css/style1.css') }}" rel="stylesheet">
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
                                    <span>Compose</span>
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
                                             <img src="assets/image/search.png" alt="">
                                         </div> 
                                     </div>
                                     <div class="single_member_row sigle_user_active d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="single_member_row d-flex p-3">
                                         <div class="support_user_profile me-3">
                                             <img src="assets/image/support_user.png" alt="">
                                         </div>
                                         <div class="suppor_user_information ">
                                             <p class="mb-0">Rudani vievek m</p>
                                             <h4 class="mb-1">Unable to select currency when or</h4>
                                             <p>Hello team, I am facing problem as i can not select</p>
                                         </div>
                                         <div class="date_start">
                                             <div class="date d-flex align-items-center">
                                                 <img src="assets/image/support_pin.png" alt="">
                                                 <p class="mb-0">12 Jan</p>
                                             </div>
                                             <div class="support_star text-end mt-4">
                                                 <img src="assets/image/support_star.png" alt="">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="sigle_user_chat_main w-100">
                                     <div class="single_chat_header">
                                         <h3>Unable to select currency when order</h3>
                                         <div class="d-flex justify-content-between pt-3">
                                             <span class=" ">
                                                 <img src="assets/image/support_flag.png" alt="" class="me-2 d-inline">
                                                 <p class="mb-0 d-inline">Technical Problem</p>
                                             </span>
                                             <span class="d-flex text-end support_mark_read_button">
                                                 <img src="assets/image/check_icon.png" alt="" class="">
                                                 <p class="mb-0 support_button">Mark as Read</p>
                                             </span>
                                         </div>
                                     </div>
                                     <div class="support_user_chat p-3">
                                         <div class="chat_profile_image d-flex align-items-center justify-content-between">
                                             <div class="profile_picture_and_name ">
                                                 <img src="assets/image/support_user.png" alt="" class="d-inline">
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
                                                     <p>  I recently bought bitcoin from you. But still have not recieved any of it yet</p>
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
                                             <input type="text" name="meessage" placeholder="hello..." class="form-control" style="border:none">
                                         </div>
                                         <div class="reply_button py-3 ps-3">
                                             <button class="support_reply_button me-3">Reply</button>
                                             <img src="assets/image/support_gallary.png" alt="">
                                             <img src="assets/image/support_attechment.png" alt="">
                                             <img src="assets/image/suport_hash.png" alt="">
                                         </div>
                                     </div>
                                 </div>
                                 
                             </div>
                        </div>
                    </div>

</div>

</div>
<!-- end Q/C page -->
@endsection
@section('extra-script')

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

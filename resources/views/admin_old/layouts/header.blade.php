<div class="cart_top_wrap ">
    <ul>
        <li>
            <div class="top_right_icon">
                <img src="{{asset('admin-assets/image/search_big_icon.png')}}" alt="icon">
            </div>
        </li>
        <li>
            <div class="top_right_icon cart_wrap">
                <img src="{{asset('admin-assets/image/cart.png')}}" alt="icon">
            </div>
        </li>
        <li>
            <div class="top_right_icon notification_wrap">
                <img src="{{asset('admin-assets/image/bell.png')}}" alt="icon">
            </div>
        </li>
        <li>
            <div class="top_right_icon" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="{{asset('admin-assets/image/account.png')}}" alt="icon">
            </div>
        </li>
        <li>
            <a href="#0" class="menu_trigger d-lg-none">
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z"
                        fill="#FFCE55" />
                </svg>
            </a>
        </li>
    </ul>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img src="{{asset('admin-assets/image/account.png')}}" class="profile_img_round" alt="">
                            </div>
                            <div class="text-center my-3">
                                <h4 class="text-dark">DoNotDisturb</h4>
                                <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body modal-body-cancel text-center">
                    <a class="logout" href="{{route('admin.logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
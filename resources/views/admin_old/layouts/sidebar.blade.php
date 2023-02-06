<div class="sidebar_left  display-block" id="style-4">
    <a href="{{route('admin.dashboard')}}"><img src="{{asset('admin-assets/image/logo.png')}}" alt="logo" name="logo"
            class="pt-4" /></a>
    <div class="">
        <div class="hedding_main d-flex align-items-center pt-4">
            <a href="{{route('admin.dashboard')}}" id="dashbord_text" class="d-flex align-items-center">
                <div class="dashbord_img_main  d-flex justify-content-center align-items-center " id="dashbord">
                    <img src="{{asset('admin-assets/image/dashbord_white.png')}}" alt="dashboard" id="dashboard_icon">
                </div>
                <li class="ps-3  d-none menu_name"> Dashboard</li>
            </a>
        </div>
        <div class="side_menu_main">
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="user.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center" id="user_img">
                        <img src="{{asset('admin-assets/image/dashbord_icon (12).png')}}" alt="" id="user_icon">
                        <img src="{{asset('admin-assets/image/user_white.png')}}" alt="" style="display: none;"
                            id="user_icon_white">
                    </div>
                    <li class="ps-3 d-none menu_name"> user</li>
                </a>
                <img src="{{asset('admin-assets/image/dropdown_icon.png')}}" alt=""
                    class=" sub_menu d-none ms-4 img-fluid   " id="sub_menu " />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="user-view.html" class="fw-bold ">seller View</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="saller.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (1).png')}}" alt="">
                    </div>
                    <li class="ps-3 d-none menu_name text-start" id=""> seller</li>
                </a>
                <img src="{{asset('admin-assets/image/dropdown_icon.png')}}" alt=""
                    class=" sub_menu_arrow ms-4 img-fluid  d-none " id="sub_menu_arrow" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="{{route('admin.seller.hold-seller')}}" class="fw-bold ">seller View</a></li>
                <li><a href="{{route('admin.seller.approval')}}" class="fw-bold ">seller Approval</a></li>
                <li><a href="{{route('admin.seller.un-hold-seller')}}" class="fw-bold">Unhold Seller</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between categoryDiv">
                <a href="{{route('admin.category.index')}}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (2).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name"> category</li>
                </a>
                    <img src="{{asset('admin-assets/image/dropdown_icon.png')}}" alt=""
                    class=" sub_menu_arrow ms-4 img-fluid  d-none category-drop-down-icon" id="sub_menu_arrow" style="display: none" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2 category-name">   
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between categoryDiv">
                <a href="{{route('admin.subcategory.index')}}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (2).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name"> Sub Category</li>
                </a>
                    <img src="{{asset('admin-assets/image/dropdown_icon.png')}}" alt=""
                    class=" sub_menu_arrow ms-4 img-fluid  d-none sub-category-drop-down-icon" id="sub_menu_arrow" style="display: none" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2 sub-category-name">   
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between categoryDiv">
                <a href="{{route('admin.childsubcategory.index')}}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (2).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name"> Child Sub Category</li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center position-relative justify-content-between   w-100">
                <a href="dashbord.html" class="active_text d-flex align-items-center">
                    <div class="dashbord_img_main   d-flex justify-content-center align-items-center active_menu">
                        <!-- <img src="{{asset('admin-assets/image/dashbord_icon (3).png')}}" alt=""> -->
                        <img src="{{asset('admin-assets/image/product_white_icon.png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name fw-bold active_text ">product</li>
                </a>
                <img src="{{asset('admin-assets/image/dropdown_icon.png')}}" alt=""
                    class="d-none sub_menu d-none_arrow img-fluid " id="sub_menu d-none_arrow" />
            </div>
            <ul class="sub_menu d-none p-0 m-0 ms-5 mt-2">
                <li><a href="{{url('admin-assets/product_approval/single_product_listing')}}" class="fw-bold ">product
                        Approval</a>
                </li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.order.index') }}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (4).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name"> order</li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.logistic.panding-payment') }}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (5).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        logistic
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="payment.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (6).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        payment
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="marketting.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (7).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        marketing
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="wallet.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (8).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        wallet
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="referral.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (9).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Referral
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="report.html" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin-assets/image/dashbord_icon (10).png')}}" alt="">
                    </div>
                    <li class="ps-3 d-none menu_name ">
                        report
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.support.index') }}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{ asset('admin-assets/image/dashbord_icon (11).png') }}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        support
                    </li>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="sidebar_left  display-block" id="style-4">
    <a href="{{route('admin.dashboard')}}"><img src="{{asset('admin/image/logo.png')}}" alt="logo" name="logo" class="pt-4" /></a>
    <div class="">
        <div class="hedding_main d-flex align-items-center pt-4">
            <a href="{{route('admin.dashboard')}}" id="dashbord_text" class="d-flex align-items-center" data-menu="{{route('admin.dashboard')}}">
                <div class="dashbord_img_main  d-flex justify-content-center align-items-center " id="dashbord">
                    <img src="{{asset('admin/image/dashbord_white.png')}}" alt="dashboard" id="dashboard_icon">
                </div>
                <li class="ps-3  d-none menu_name"> Dashboard</li>
            </a>
        </div>
        <div class="side_menu_main">
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{route('admin.user.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.user.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center" id="user_img">
                        <img src="{{asset('admin/image/dashbord_icon_(12).png')}}" alt="" id="user_icon">
                        <img src="{{asset('admin/image/user_white.png')}}" alt="" style="display: none;" id="user_icon_white">
                    </div>
                    <li class="ps-3 d-none menu_name">User</li>
                </a>
                <img src="{{asset('admin/image/dropdown_icon.png')}}" alt="" class=" sub_menu d-none ms-4 img-fluid   " id="sub_menu " />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="{{ route('admin.seller.list') }}" class="fw-bold ">Seller View</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.seller.list') }}" class="d-flex align-items-center" data-menu="{{ route('admin.seller.list') }}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(1).png')}}" alt="">
                    </div>
                    <li class="ps-3 d-none menu_name text-start" id="">Seller</li>
                </a>
                <img src="{{asset('admin/image/dropdown_icon.png')}}" alt="" class=" sub_menu_arrow ms-4 img-fluid  d-none " id="sub_menu_arrow" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="{{route('admin.seller.hold-seller')}}" class="fw-bold {{route('admin.seller.hold-seller')}}">seller View</a></li>
                <li><a href="{{route('admin.seller.approval')}}" class="fw-bold {{route('admin.seller.approval')}}">seller Approval</a></li>
                <li><a href="{{route('admin.seller.un-hold-seller')}}" class="fw-bold {{route('admin.seller.un-hold-seller')}}">Unhold Seller</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between categoryDiv">
                <a href="{{route('admin.category.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.category.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(2).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">Category</li>
                </a>
                <img src="{{asset('admin/image/dropdown_icon.png')}}" alt="" class=" sub_menu_arrow ms-4 img-fluid  d-none" id="sub_menu_arrow" style="display: none" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="{{route('admin.subcategory.index')}}" class="fw-bold {{route('admin.subcategory.index')}} ">Sub-category</a></li>
                <li><a href="{{route('admin.childsubcategory.index')}}" class="fw-bold {{route('admin.childsubcategory.index')}} ">Child Sub-category</a></li>
                <li><a href="{{ route('admin.hsncode.index') }}" class="fw-bold {{ route('admin.hsncode.index') }}">HSN Code</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between categoryDiv">
                <a href="{{route('admin.bannerImage.list')}}" class="d-flex align-items-center" data-menu="{{route('admin.bannerImage.list')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(2).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">Banner Image</li>
                </a>
                <img src="{{asset('admin/image/dropdown_icon.png')}}" alt="" class=" sub_menu_arrow ms-4 img-fluid  d-none" id="sub_menu_arrow" style="display: none" />
            </div>
            <ul class="sub_menu d-none  p-0 m-0 ms-5 mt-2">
                <li><a href="{{route('admin.bannerImage.list')}}?type=top" class="fw-bold {{route('admin.bannerImage.list')}}?type=top ">Top</a></li>
                <li><a href="{{route('admin.bannerImage.list')}}?type=center" class="fw-bold {{route('admin.bannerImage.list')}}?type=center ">Center</a></li>
                <li><a href="{{route('admin.bannerImage.list')}}?type=bottom" class="fw-bold {{route('admin.bannerImage.list')}}?type=bottom">Bottom</a></li>
            </ul>
            <div class="hedding_main d-flex align-items-center position-relative justify-content-between   w-100">
                <a href="{{route('admin.product_approval.index')}}" class="active_text d-flex align-items-center" data-menu="{{route('admin.product_approval.index')}}">
                    <div class="dashbord_img_main   d-flex justify-content-center align-items-center">
                        <!-- <img src="{{asset('admin/image/dashbord_icon_(3).png')}}" alt=""> -->
                        <img src="{{asset('admin/image/product_white_icon.png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name fw-bold ">Product</li>
                </a>
                <img src="{{asset('admin/image/dropdown_icon.png')}}" alt="" class="d-none sub_menu d-none_arrow img-fluid " id="sub_menu d-none_arrow" />
            </div>
            <!-- <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.hsncode.index') }}" class="d-flex align-items-center">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                    <img src="{{asset('admin-assets/image/dashbord_icon (4).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        HSN Code
                    </li>
                </a>
            </div> -->
            <ul class="sub_menu d-none p-0 m-0 ms-5 mt-2">
                <li><a href="{{url('admin/product_approval/single_product_listing')}}" class="fw-bold ">product
                        Approval</a>
                </li>
            </ul>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.order.index') }}" class="d-flex align-items-center" data-menu="{{ route('admin.order.index') }}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(4).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">Order</li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.logistic.panding-payment') }}" class="d-flex align-items-center" data-menu="{{ route('admin.logistic.panding-payment') }}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(5).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Logistic
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{route('admin.payment.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.payment.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(6).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Payment
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{route('admin.marketing.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.marketing.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(7).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Marketing
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{route('admin.wallet.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.wallet.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(8).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        wallet
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between" ]>
                <a href="{{route('admin.referral.index')}}" class="d-flex align-items-center" data-menu="{{route('admin.referral.index')}}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(9).png')}}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Referral
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="report.html" class="d-flex align-items-center" data-menu="Report">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{asset('admin/image/dashbord_icon_(10).png')}}" alt="">
                    </div>
                    <li class="ps-3 d-none menu_name ">
                        Report
                    </li>
                </a>
            </div>
            <div class="hedding_main d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.support.index') }}" class="d-flex align-items-center" data-menu="{{ route('admin.support.index') }}">
                    <div class="dashbord_img_main  d-flex justify-content-center align-items-center">
                        <img src="{{ asset('admin/image/dashbord_icon_(11).png') }}" alt="">
                    </div>
                    <li class="ps-3  d-none menu_name">
                        Support
                    </li>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    let allMenuOption = document.querySelectorAll('[data-menu]')

    function activeMenu() {
        let url = window.location.href.replace(/#/g, "")
        let activeElem = document.querySelector(`[data-menu="${url}"] div.dashbord_img_main`);
        let activeLi = document.querySelector(`[data-menu="${url}"] li`);
        let activeSubMenu = document.getElementsByClassName(url)[0];
        
        if(activeSubMenu){
            let parent = activeSubMenu.parentElement.parentElement.previousElementSibling;
            parent.querySelector("a div").classList.add("active_menu")
            parent.querySelector("a li").classList.add("active_text")
            activeSubMenu?.classList.add("active_text");
        }else{
            activeElem?.classList.add("active_menu");
            activeLi?.classList.add("active_text")
        }
    }

    allMenuOption.forEach((elem) => {
        elem.addEventListener('click', function(event) {
            sessionStorage.setItem("active-menu-admin", this.dataset.menu)
        })
    })

    activeMenu();
</script>
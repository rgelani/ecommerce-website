@php
use App\Models\menu;

$query = menu::where(['is_delete' => 'N'])->orderBy('id', 'ASC')->get();
@endphp
<!-- Sidebar Start -->
<div class="sidebar_wrapper">
    <div class="sidebar_block">
        <div class="sidebar_menu_block">
            <div class="mobile_menu_header">
                <div class="logo_wrap">
                    <div class="logo">
                        <a href="{{route('seller.dashboard')}}">
                            <img src="{{ asset('seller-assets/image/dashborad_logo.png') }}" alt="logo" class="logo_img">
                        </a>
                    </div>
                    <a href="javascript:void(0);" class="menu_trigger rotate" style="margin:26px 1px" onclick="arrow_toggle()">
                        <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z" fill="#FFCE55" /> -->
                            <div class="fa fa-chevron-left" style="color: #FFCE55;margin-left:-12px;"></div>
                        </svg>
                    </a>
                    <!-- <script>
                        function arrow_toggle() {
                            $('.rotate').toggleClass("down");
                            $('.rotate').css("margin","26px -16px")
                        }
                    </script> -->
                </div>
            </div>
            <div class="sidebar_menu">
                <ul>
                    @foreach($query as $key => $value)
                    <li>
                        <a href="{{url($value->slug ? 'seller/'.$value->slug : url('/seller/dashboard'))}}" data-bs-toggle="tooltip" data-bs-placement="right" title="{{$value->title}}">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/dashboard.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">{{$value->title}}</div>
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{route('seller.dashboard')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Dashboard" title="Dashboard">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/dashboard.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <div class="accordion_menu_wrap">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Product" title="Product">
                                <div class="menu_icon">
                                    <img src="{{ asset('seller-assets/image/sidebar/product.png') }}" alt="icon">
                                </div>
                                <div class="menu_text menu_text_product">Product</div>
                                <img src="{{ asset('seller-assets/image/dropdown_dark_icon.png') }}" alt="" class=" sub_menu_arrow ms-4 img-fluid   " id="sub_menu_arrow" />
                            </a>
                            <div class="accordion_menu_info">
                                <ul>
                                    <li>
                                        <a href="{{ route('seller.product.view') }}" class="{{ route('seller.product.view') }}">
                                            product view
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seller.product.product_upload') }}" class="{{ route('seller.product.product_upload') }} {{ route('seller.product.index') }} {{ route('seller.product.bluk_product') }}">
                                            {{-- <a href="{{ route('seller.product.index') }}"> --}}
                                            product upload
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seller.product.image_bulk_upload') }}" class="">
                                            {{-- <a href="{{ route('seller.bulk-image-upload') }}"> --}}
                                            image bulk upload
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('seller.order.newOrder') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Order" title="Order">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/order.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Order</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.marketing.index') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Marketing" title="Marketing">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/marketing.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Marketing</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('seller.payments.next-payment-index')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Payment" title="Payment">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/payment.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Payment</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('seller.packaging.index')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Packaging" title="Packaging">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/payment.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Packaging</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.wallet') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Wallet" title="Wallet">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/wallet.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Wallet</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.support.index') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Support" title="Support">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/support.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Support</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.referral.index') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Referral" title="Referral">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/referralsystem.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">
                                Referral System
                            </div>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Report" title="Report">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/FAQ.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Report</div>
                        </a>
                    </li> -->
                    <li>
                        <a href="{{ route('seller.faq') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="FAQ" title="FAQ">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/FAQ.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">FAQ</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('seller.profile.basic-details')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-menu="Profile" title="Profile">
                            <div class="menu_icon">
                                <img src="{{ asset('seller-assets/image/sidebar/Profile.png') }}" alt="icon">
                            </div>
                            <div class="menu_text">Profile</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        let allMenuOption = document.querySelectorAll('[data-bs-toggle="tooltip"]')

        function activeMenu() {
            let active = localStorage.getItem("active-menu") ?? "Product";
            let activeElem = document.querySelector(`[data-menu="${active}"]`);
            let activeSubMenu = document.getElementsByClassName(window.location.href.replace("#", ""))[0];
            // let activeSubMenu = document.querySelector(`[href="${window.location.href.replace("#", "")}"]`); 
            activeElem.classList.add("active");
            activeSubMenu.classList.add("active");
        }

        allMenuOption.forEach((elem) => {
            elem.addEventListener('click', function(event) {
                localStorage.setItem("active-menu", this.dataset.menu)
            })
        })

        activeMenu();
    </script>
</div>
<!-- Sidebar End -->
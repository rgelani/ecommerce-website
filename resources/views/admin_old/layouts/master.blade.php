<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body onload="load()">
    <div class="themelightbg menu_background">
        <div class="custome_con">
            <div class="row">
                @include('admin.layouts.sidebar')
                <div class="main_content menu_div position-relative mt-5">
                    @include('admin.layouts.header')
                    <div class="sidebar_menu_arrow mt-3">
                        <div class="menu_arrow" id="slider_arrow">
                            <img src="{{ asset('admin-assets/image/dashbord_arrow.png') }}" alt="slider arrow"
                                class="position-fixed">
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.script')
    @yield('extra-js')
</body>

</html>
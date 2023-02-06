<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')
<body class="main-commen-page">

    @include('user.layouts.header')
    <div class="main-commen-page">
        <!--end menu arrow -->
        @yield('content')
    </div>
    @include('user.layouts.footer')
    @include('user.layouts.script')
    @yield('extra-js')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

@include('user.my-accounts.layouts.head')
<body class="">
<!--begin::profile page -->
<section class="bg_on_body ">
    @include('user.my-accounts.layouts.header')

    @yield('content')
</section>

@include('user.my-accounts.layouts.footer')

@include('user.my-accounts.layouts.script')
@yield('extra-js')

</body>
</html>

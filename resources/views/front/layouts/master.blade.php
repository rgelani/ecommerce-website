<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Home - Index </title>
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <!-- bootstrape -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- slike  css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- on scroll event -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="main-commen-page">

    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    <!--jquery library -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrape js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--slike min  -->
    <script src="assets/js/slick.min.js"></script>
     <!-- on scroll event library -->
     <script src="assets/js/aos.js"></script>
     
     <!-- Main Activation JS -->
     <script src="assets/js/script.js"></script>
     <script>
         AOS.init();
         </script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
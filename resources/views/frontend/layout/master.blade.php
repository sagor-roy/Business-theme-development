<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <!-- favicon icons -->
    <link rel="icon" href="" type="image/gif" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.carousel.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

</head>

<body>
<!-- header -->
<header>
    @include('frontend.layout.navbar')
</header>
<!-- header end-->

{{--main content start--}}
@yield('content')
{{--end--}}


<!-- footer section -->
<footer>
    @include('frontend.layout.footer')
</footer>
<!-- footer end -->

<!-- Bootstrap js -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-3.6.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<!-- custom js -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/custom.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/vendor/js/brand.carousel.js') }}"></script>
<!--counter js-->
<script type="text/javascript" src="{{ asset('assets/frontend/vendor/js/numscroller-1.0.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/fontawesome/all.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/main.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/responsive.css') }}">
    {{-- data table --}}
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/css/data-table/dataTables.bootstrap4.min.css') }}">
    {{--  color-picker  --}}
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/css/color-picker/jquery.minicolors.css') }}">

</head>

<body>
    <!-- sideBar wrapper -->
    @include('backend.layout.sidebar')
    {{-- end --}}

    <!-- content wrapper-->
    <div class="content-wrapper sideBars_open">
        <!-- top head start -->
        @include('backend.layout.topNavbar')
        {{-- end --}}

        <!-- Main content start -->
        <div class="main_content">
            <!-- content area -->
            <div class="container-fluid">
                @yield('main')
            </div>
        </div>
    </div>

    <!-- footer section -->
    <div class="footer_section">
        Copyright @2021 all reserved by HR venture
    </div>


    <!--Start javascript -->
    <!-- jQuery.min.js -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <!-- Optional js  -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/main.js') }}"></script>
    {{-- data table --}}
    <script type="text/javascript" src="{{ asset('assets/backend/vendor/js/data-table/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/vendor/js/data-table/dataTables.bootstrap4.min.js') }}"></script>
    {{--  color picker  --}}
    <script type="text/javascript" src="{{ asset('assets/backend/vendor/js/color-picker/jquery.minicolors.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/vendor/js/color-picker/color.picker.js') }}"></script>
    {{--text-editor--}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    {{--Ajax.js File Include--}}
    @include('backend.layout.ajax')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MegaWeb</title>
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('/cpanel/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}"/>
    <link rel="shortcut icon" href="{{ asset('cpanel/images/favicon.png') }}"/>
    <script src="{{ asset('/cpanel/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/cpanel/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/cpanel/css/style.css') }}"/>
    
</head>

<body>
<div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
@include('admin.header')

<!-- partial -->
    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:../../partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->
        @yield('content')
        <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">MegaWeb</a> &copy; 2018
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </div>
</div>
</body>
    <script src="{{ asset('/cpanel/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    {{--<script src="{{ asset('/cpanel/node_modules/jquery-validation/dist/jquery.validate.min.js') }}"></script>--}}
    <script src="{{ asset('/cpanel/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/cpanel/js/sidebar-icon.js') }}"></script>
    <script src="{{ asset('/cpanel/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/cpanel/js/misc.js') }}"></script>
    {{--<script src="{{ asset('/cpanel/js/form-validation.js') }}"></script>--}}
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin</title>
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/icheck/skins/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/images/favicon.png') }}" />
    <script src="{{ asset('/cpanel/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/cpanel/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
    {{--<script src="{{ asset('/cpanel/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('/cpanel/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    {{--<script src="{{ asset('/cpanel/node_modules/jquery-validation/dist/jquery.validate.min.js') }}"></script>--}}
    <script src="{{ asset('/cpanel/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/cpanel/js/sidebar-icon.js') }}"></script>
    <script src="{{ asset('/cpanel/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/cpanel/js/misc.js') }}"></script>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Register</h3>
                        <form id="myform">
                            <div class="form-group">
                                <input type="text" class="form-control p_input" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control p_input" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control p_input" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control p_input" placeholder="Repeat Password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="icheck-square">
                                    <div class="icheckbox_flat" style="position: relative;"><input tabindex="1" type="checkbox" id="remember" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="remember">I Agree to the Terms &amp; conditions</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                            </div>
                            <p class="existing-user text-center pt-4 mb-0">Already have an acount?&nbsp;<a href="#">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>

     $('#myform').on('submit', function (e) {
         e.preventDefault();
         console.log('a')
     });
</script>

</html>

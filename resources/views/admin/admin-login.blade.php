<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin</title>
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('cpanel/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/icheck/skins/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/jquery/dist/jquery.min.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/popper.js/dist/umd/popper.min.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/bootstrap/dist/js/bootstrap.min.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/node_modules/icheck/icheck.min.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/js/iCheck.js') }}" />
    <link rel="stylesheet" href="{{ asset('/cpanel/js/misc.js') }}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control p_input" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p_input" placeholder="Password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="icheck-square">
                                    <input tabindex="1" type="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                            </div>
                            <p class="Or-login-with my-3">Or login with</p>
                            <a href="#" class="facebook-login btn btn-facebook btn-block">Sign in with Facebook</a>
                            <a href="#" class="google-login btn btn-google btn-block">Sign in with Google+</a>
                            <a href="#" class="google-login btn btn-create-account btn-block">Create An Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

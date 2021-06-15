<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="My Trash">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Login | My Trash</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/icons/icon-72x72.png')  }}">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{ asset('img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/icon-180x180.png') }}">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
    </div>
</div>
<!-- Login Wrapper Area-->
<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
    <!-- Background Shape-->
    <div class="background-shape"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo"
                                                                         src="img/core-img/logo-white.png" alt="">
                <!-- Register Form-->
                <div class="register-form mt-5 px-4">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="form-group text-left mb-4"><span>Email</span>
                            <label for="username"><i class="lni lni-envelope"></i></label>
                            <input class="form-control" id="username" name="email" type="email"
                                   placeholder="info@example.com">
                        </div>
                        <div class="form-group text-left mb-4"><span>Password</span>
                            <label for="password"><i class="lni lni-lock"></i></label>
                            <input class="form-control" id="password" name="password" type="password"
                                   placeholder="********************">
                        </div>
                        <button class="btn btn-success btn-lg w-100" type="submit">Log In</button>
                    </form>
                </div>
                <!-- Login Meta-->
                <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1"
                                                href="{{ url('forgot-password') }}">Forgot Password?</a>
                    <p class="mb-0">Didn't have an account?<a class="ml-1" href="{{ url('register') }}">Register Now</a>
                    </p>
                </div>
                @if($msg = session('success'))
                    <div class="alert alert-info">
                        <div class="text-center">
                            {{ $msg }}
                        </div>
                    </div>
                @endif
                @if($msg = session('fail'))
                    <div class="alert alert-warning">
                        <div class="text-center">
                            {{ $msg }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- All JavaScript Files-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
{{--<script src="js/jquery.counterup.min.js"></script>--}}
{{--<script src="js/jquery.countdown.min.js"></script>--}}
{{--<script src="js/default/jquery.passwordstrength.js"></script>--}}
<script src="{{ asset('js/wow.min.js') }}"></script>
{{--<script src="js/jarallax.min.js"></script>--}}
{{--<script src="js/jarallax-video.min.js"></script>--}}
<script src="{{ asset('js/default/dark-mode-switch.js') }}"></script>
<script src="{{ asset('js/default/no-internet.js') }}"></script>
<script src="{{ asset('js/default/active.js') }}"></script>
<script src="{{ asset('js/pwa.js') }}"></script>
</body>
</html>

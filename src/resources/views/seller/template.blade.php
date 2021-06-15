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
    <title>My Trash</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/icons/icon-72x72.png')  }}">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{ asset('img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/icon-180x180.png') }}">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
@yield('addon-css')
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
<!-- Header Area-->
<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper">
            <a href="{{ '/' }}">
                {{--                <img src="{{ asset('img/core-img/logo-small.png') }}" alt="">--}}
                <i class="lni lni-home"></i>
            </a>
        </div>
        <!-- Search Form-->
        <div class="page-heading">
            <h6 class="mb-0">MY <span style="color: #00b894">TRASH</span></h6>
        </div>
        <div class="filter" id="">
            <!-- <i class="lni lni-cog"></i> -->
        </div>
        <!-- Navbar Toggler-->

    </div>
</div>

<!-- PWA Install Alert-->
<!-- <div class="toast pwa-install-alert shadow" id="pwaInstallToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="8000" data-autohide="true">
  <div class="toast-body">
    <button class="ml-3 close" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="content d-flex align-items-center mb-2"><img src="img/icons/icon-72x72.png" alt="">
      <h6 class="mb-0 text-white">Add to Home Screen</h6>
    </div><span class="mb-0 d-block text-white">Add Suha on your mobile home screen. Click the<strong class="mx-1">"Add to Home Screen"</strong>button & enjoy it like a regular app.</span>
  </div>
</div> -->

<div class="page-content-wrapper pb-3">

    @yield('content')

</div>


</div>
<!-- Internet Connection Status-->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
    <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
            <ul class="h-100 d-flex align-items-center justify-content-between pl-0">
                <li><a href="{{ url('/') }}"><i class="lni lni-home"></i>Home</a></li>
                <li><a href="{{ url('history') }}"><i class="lni lni-shopping-basket"></i>History</a></li>
                <li><a href="{{ url('help') }}"><i class="lni lni-help"></i>Help</a></li>
                <li><a href="{{ url('profile') }}"><i class="lni lni-user"></i>Account</a></li>
                <!-- <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li> -->
            </ul>
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
